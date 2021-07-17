<?php

namespace app\controllers;

use Yii;
use app\models\File;
use app\models\FileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Administrativeunit;
use app\models\Office;
use app\models\Officefile;
use yii\web\UploadedFile;

/**
 * FileController implements the CRUD actions for File model.
 */
class FileController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
        /*
          return [
          'verbs' => [
          'class' => VerbFilter::className(),
          'actions' => [
          'delete' => ['POST'],
          ],
          ],
          ]; */
    }

    /**
     * Lists all File models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new FileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionFiles() {
        //$searchModel = new FileSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $offices = Office::find()->where(['fkadministrativeunit' => Yii::$app->profile->fkworksin])->all();

        //$officefiles = Officefile::find();
        //$files = File::find();

        $unit = Administrativeunit::find()->where(['idadministrativeunit' => Yii::$app->profile->fkworksin])->one();
        //print_r($unit); die();
        return $this->render('files', [
                    'unit' => $unit,
                    'offices' => $offices,
                        //'officefiles' => $officefiles,
                        //'files' => $files,
                        //'searchModel' => $searchModel,
                        //'dataProvider' => $dataProvider,
        ]);
    }

    public function actionDocumentviewer($id) {
        return $this->render('documentviewer', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Displays a single File model.
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
     * Creates a new File model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new File();

        ///////////////////////////////////////////////////

        if ($model->load(Yii::$app->request->post())) {

            $filess = UploadedFile::getInstances($model, 'imageFiles');

            foreach ($filess as $files) {

                if (!is_null($files)) {

                    $name = explode(".", $files->name);
                    $ext = end($name);
                    $fileurl = Yii::$app->security->generateRandomString() . ".{$ext}";
                    $model->file = $fileurl;
                    $resourcesFiles = Yii::$app->basePath . '/web/resourcesFiles/office/prueba/';
                    $path = $resourcesFiles . $model->file;                    

                    //IMPOTANTE PARA PASAR LA VALIDACION
                    $model->name = $files->name;
                    $model->format = "{$ext}";
                    $model->size = $files->size . " K";
                    /////////////////////////
                    $filename = $files->name;
                    $fileformat = "{$ext}";
                    $filesize = $files->size . " K";

                    if ($files->saveAs($path)) {

                        if (Yii::$app->db->createCommand("INSERT INTO file (`name`, `file`, `format`, `size`) VALUES ('" . $filename . "','" . $fileurl . "','" . $fileformat . "','" . $filesize . "')")->execute()) {
                            /*
                              echo '<br>funciona el save modekl<br>';
                              echo '<pre>';
                              print_r($model->getAttributes());
                              echo '<br><br>';
                              print_r($model->getErrors());
                              echo '</pre>';
                             */
                        } else {
                            /*
                              echo "<br>no funciona el save model<br>";
                              echo "MODEL NOT SAVED";
                              echo '<pre>';
                              print_r($model->getAttributes());
                              echo '<br><br>';
                              print_r($model->getErrors());
                              echo '</pre>';
                              exit;
                             */
                        }
                    }
                }
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing File model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idfile]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing File model.
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
     * Finds the File model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return File the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = File::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
