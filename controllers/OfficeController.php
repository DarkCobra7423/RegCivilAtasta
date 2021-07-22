<?php

namespace app\controllers;

use Yii;
use app\models\Office;
use app\models\OfficeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\File;
use app\models\Officefile;
use yii\web\UploadedFile;
use app\models\Notifications;
use app\models\Sendoffice;

/**
 * OfficeController implements the CRUD actions for Office model.
 */
class OfficeController extends Controller {

    public $freeAccessActions = ['existexpedient', 'existnooficce'];

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }

    /**
     * Lists all Office models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new OfficeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionOfficesend() {

        $sendoffices = Sendoffice::find()->where(['fkprofile' => Yii::$app->profile->idprofile])->all();

        return $this->render('officesend', [
                        'sendoffices' => $sendoffices,
                            //'dataProvider' => $dataProvider,
            ]);
    }

    public function actionFilter() {
        $searchModel = new OfficeSearch();
        //var_dump(Yii::$app->request->queryParams); die();
        //$dataProvider = $searchModel->search(Office::find()->where(['AND','fkadministrativeunit = '.Yii::$app->profile->fkworksin, 'fkstateoffice = 2 OR fkstateoffice = 3'])->all());
        $dataProvider = $searchModel->searchFilter(Yii::$app->request->queryParams);
        /*
          echo '<pre>';
          print_r($dataProvider);
          echo '<br>Aqui es otro--------------------------------';
          var_dump($dataProvider);
          echo '</pre>';
          die(); */

        return $this->render('filter', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionUpload() {

        $model = new Office();

        $modelfile = new File();

        $officefile = new Officefile;

        $notify = new Notifications();

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

                Yii::$app->db->createCommand("INSERT INTO notifications (`title`, `message`, `read`, `fkprofile`, `fkoffice`, `fkadministrativeunit`) VALUES ('Nuevo oficio en estado pendiente. <span class=badge-success>" . $category . "</span><br>Expediente (" . $expedient . ") y No. Oficio (" . $nooffice . ")','" . $subject . "','0','" . Yii::$app->profile->idprofile . "','" . $idofficeinsert->idoffice . "','" . $fkadministrativeunit . "')")->execute();
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
                return $this->redirect(['uploadconfirm', 'id' => $idofficeinsert->idoffice]);
            }
        }
        //////////////////////////////////////////////
        //
        ///este no
        /*
          if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['uploadconfirm', 'id' => $model->idoffice]);
          } */

        return $this->render('upload', [
                    'modelfile' => $modelfile,
                    'model' => $model,
                    'sends' => NULL,
        ]);
    }

    public function actionUploadconfirm($id) {

        $model = new Office();

        $modelfile = new File();
        //print_r($_POST);
        //if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //return $this->redirect(['view', 'id' => $model->idoffice]);
        $sends = Office::find()->select('expedient')->where(['idoffice' => $id])->one();
        //print_r($send); die();
        return $this->render('upload', [
                    'modelfile' => $modelfile,
                    'model' => $model,
                    'sends' => $sends,
        ]);
        //}
        /*
          return $this->render('upload', [
          'model' => $model,
          'sends' => NULL,
          ]); */
    }

    public function actionEvaluate() {

        $offices = Office::find()->where(['AND', 'fkadministrativeunit = ' . Yii::$app->profile->fkworksin, 'fkstateoffice = 2 OR fkstateoffice = 3'])->orderBy('creationdate ASC')->all();
        $formes = Office::find()->where(['AND', 'fkadministrativeunit = ' . Yii::$app->profile->fkworksin, 'fkstateoffice = 2 OR fkstateoffice = 3', 'fkto = ' . Yii::$app->profile->idprofile])->orderBy('creationdate ASC')->all();

        return $this->render('evaluate', [
                    'offices' => $offices,
                    'formes' => $formes,
        ]);
    }

    public function actionEvaluating($id) {
        $model = $this->findModel($id);

        $offices = Office::find()->where(['fkadministrativeunit' => Yii::$app->profile->fkworksin, 'idoffice' => $id])->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->idoffice]);
            return $this->redirect(Yii::$app->homeUrl . "office/evaluate");
        }

        return $this->render('evaluating', [
                    'offices' => $offices,
                    'model' => $model,
        ]);
    }

    public function actionEvaluatingnotify($id, $not) {
        $model = $this->findModel($id);

        $offices = Office::find()->where(['fkadministrativeunit' => Yii::$app->profile->fkworksin, 'idoffice' => $id])->all();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->idoffice]);
            return $this->redirect(Yii::$app->homeUrl . "office/evaluate");
        }

        $model1 = Notifications::find()->where(['idnotifications' => $not])->one();
        $model1->read = '1';
        $model1->save();
        //$this->redirect(Yii::$app->homeUrl.'notifications/allnotifications');

        return $this->render('evaluating', [
                    'offices' => $offices,
                    'model' => $model,
        ]);
    }

    public function actionWorksin($unit) {
        $tos = \app\models\Profile::find()->where(['fkworksin' => $unit])->all();
        echo "<option value=''>Selecione uno...</option>\n";
        foreach ($tos as $to) {
            echo "<option value='{$to->idprofile}'>{$to->name} {$to->lastname}</option>\n";
        }
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

    public function actionExistexpedient($value) {
        $exist = Office::find()->select('expedient')->where(['expedient' => $value])->one();

        if (empty($exist->expedient)) {
            echo 'false';
        } else {
            echo 'true';
        }
        //echo $exist->expedient;
    }

    public function actionExistnooficce($value) {
        $exist = Office::find()->select('nooffice')->where(['nooffice' => $value])->one();

        if (empty($exist->nooffice)) {
            echo 'false';
        } else {
            echo 'true';
        }
    }

    /**
     * Displays a single Office model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Office model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Office();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idoffice]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Office model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idoffice]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Office model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id) {

        $this->findModel($id)->delete();
        /*
          $model = $this->findModel($id);

          $urlimagen = "resourcesFiles/office/".$model->file;

          if(file_exists($urlimagen)){
          unlink($urlimagen);
          }

          $model->delete();
         */
        //return $this->redirect(['index']);
        return $this->redirect(Yii::$app->homeUrl . "office/evaluate");
    }

    /**
     * Finds the Office model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Office the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Office::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
