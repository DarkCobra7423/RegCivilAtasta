<?php

namespace app\controllers;

use Yii;
use app\models\Office;
use app\models\OfficeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\File;
use yii\web\UploadedFile;

/**
 * OfficeController implements the CRUD actions for Office model.
 */
class OfficeController extends Controller {

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

        //print_r($_FILES); die();
        /*
        echo '<pre>';
            print_r($modelfile);
            echo '</pre><br><br><br>--------------------------------';
            //die();
            $files = UploadedFile::getInstance($modelfile, 'files[]');
            print_r($files); 
            die();
            */
        
        

           /*

            if (!is_null($files)) {
                $name = explode(".", $files->name);
                $ext = end($name);
                $modelfile->file = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesFiles = Yii::$app->basePath . '/web/resourcesFiles/office/';
                $path = $resourcesFiles . $modelfile->file;

                //Aqui los datos

                $modelfile->name = "{$files->name}";
                $modelfile->format = ".{$ext}";
                $modelfile->size = "{$files->size}";
                /*
                  echo '<pre>';
                  print_r($modelfile);
                  echo '</pre>';
                  die();

                  if($modelfile->save()){
                  echo 'se guardo'; die();
                  }else{
                  echo 'no se guardo '; die();
                  } *

                if ($files->saveAs($path)) {
                    if ($model->save() && $modelfile->save()) {

                        $officefile = new \app\models\Officefile();

                        $officefile->idoffice = $model->idoffice;
                        $officefile->idfile = $modelfile->idfile;

                        if ($officefile->save()) {
                            return $this->redirect(['uploadconfirm', 'id' => $model->idoffice]);
                        }
                    }
                }
            }
               */
           // }            
           
        
        
        
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
            return $this->redirect(['view', 'id' => $model->idoffice]);
        }

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

        return $this->redirect(['index']);
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
