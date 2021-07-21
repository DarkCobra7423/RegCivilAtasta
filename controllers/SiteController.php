<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Administrativeunit;
use app\models\Office;
use app\models\File;
use app\models\Officefile;
use yii\web\UploadedFile;

class SiteController extends Controller {

    public $freeAccess = true;

    //public $freeAccessActions = ['index', 'logout', 'createoffice'];

    /**
     * {@inheritdoc}
     */
    //public $freeAccess = true;
    

    //public  $freeAccessActions = ['site/index', 'site/createoffice'];
    
    public function behaviors() {
        
        return [
            
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
            
        ];
        /*
          return [
          'access' => [
          'class' => AccessControl::className(),
          'only' => ['logout'],
          'rules' => [
          [
          'actions' => ['logout'],
          'allow' => true,
          'roles' => ['@'],
          ],
          ],
          ],
          'verbs' => [
          'class' => VerbFilter::className(),
          'actions' => [
          'logout' => ['post'],
          ],
          ],
          ]; */
    }

    /**
     * {@inheritdoc}
     */
    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        
        //$units = Administrativeunit::find()->orderBy('RAND()')->all();
        $units = Administrativeunit::find()->all();
        
        $carousels = Administrativeunit::find()->orderBy('RAND()')->limit(3)->all();
        
        return $this->render('index', ['units' => $units, 'carousels' => $carousels]);
    }
    
    public function actionCreateoffice($id) {
        
        $model = new Office();
        
        $modelUnit = Administrativeunit::find()->where(['idadministrativeunit' => $id])->one();

        $modelfile = new File();

        $officefile = new Officefile;
        
        if ($model->load(Yii::$app->request->post()) && $modelfile->load(Yii::$app->request->post())) {
            ///////////////////
            $expedient = $model->expedient;
            $nooffice = $model->nooffice;
            $subject = $model->subject;
            $fkadministrativeunit = $model->fkadministrativeunit;
            $creationdate = $model->creationdate;
            $category = $model->category;
            $fkstateoffice = $model->fkstateoffice;

            if (Yii::$app->db->createCommand("INSERT INTO office (`expedient`, `nooffice`, `subject`, `creationdate`, `category`, `fkstateoffice`, `fkadministrativeunit`) VALUES ('" . $expedient . "','" . $nooffice . "','" . $subject . "','" . $creationdate . "','" . $category . "','" . $fkstateoffice . "','" . $fkadministrativeunit . "')")->execute()) {
                $idofficeinsert = Office::find()->select('idoffice')->where(['expedient' => $expedient, 'nooffice' => $nooffice])->one();
                
                Yii::$app->db->createCommand("INSERT INTO notifications (`title`, `message`, `read`, `fkoffice`, `fkadministrativeunit`) VALUES ('Nuevo oficio en estado pendiente. <span class=badge-warning>".$category."</span><br>Expediente (".$expedient.") y No. Oficio (".$nooffice.")','".$subject."','0','".$idofficeinsert->idoffice."','".$fkadministrativeunit."')")->execute();
                //////////////////////////////////////////////

                $filess = UploadedFile::getInstances($modelfile, 'imageFiles');
                
                foreach ($filess as $files) {

                    if (!is_null($files)) {

                        $name = explode(".", $files->name);
                        $ext = end($name);
                        $fileurl = Yii::$app->security->generateRandomString() . ".{$ext}";
                        $modelfile->file = $fileurl;
                        $resourcesFiles = Yii::$app->basePath . '/web/resourcesFiles/office/';
                        $path = $resourcesFiles . $modelfile->file;

                        //IMPOTANTE PARA PASAR LA VALIDACION
                        $modelfile->name = $files->name;
                        $modelfile->format = ".{$ext}";
                        $modelfile->size = $files->size . " K";
                        /////////////////////////
                        $filename = $files->name;
                        $fileformat = ".{$ext}";
                        //$filesize = $files->size . " K";
                        $filesize = $this->formatSizeUnits($files->size);
                        
                        if ($files->saveAs($path)) {

                            if (Yii::$app->db->createCommand("INSERT INTO file (`name`, `file`, `format`, `size`) VALUES ('" . $filename . "','" . $fileurl . "','" . $fileformat . "','" . $filesize . "')")->execute()) {

                                $idfileinsert = File::find()->select('idfile')->where(['file' => $fileurl])->one();

                                $OFidoffice = $idofficeinsert->idoffice;
                                $OFidfile = $idfileinsert->idfile;

                                if (Yii::$app->db->createCommand("INSERT INTO officefile (`idoffice`, `idfile`) VALUES ('" . $OFidoffice . "','" . $OFidfile . "')")->execute()) {
                                    //return $this->redirect(['uploadconfirm', 'id' => $idofficeinsert->idoffice]); 
                                }
                            }
                        }
                    }
                }
                return $this->redirect(Yii::$app->homeUrl);
            }
        }
        //////////////////////////////////////////////
        
        return $this->render('newoffice', [
                    'modelfile' => $modelfile,
                    'modelUnit' => $modelUnit,
                    'model' => $model,
            
        ]);
 
    }
    
    function formatSizeUnits($bytes) {
        
        if ($bytes >= 1073741824) {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        } elseif ($bytes > 1) {
            $bytes = $bytes . ' bytes';
        } elseif ($bytes == 1) {
            $bytes = $bytes . ' byte';
        } else {
            $bytes = '0 bytes';
        } 
        return $bytes;
        
    }
    
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin() {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
                    'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout() {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact() {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout() {
        return $this->render('about');
    }

}
