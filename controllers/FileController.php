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
class FileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
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
        ];*/
    }

    /**
     * Lists all File models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new FileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionFiles()
    {
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
    
    public function actionDocumentviewer($id)
    {
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
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new File model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new File();
       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idfile]);
        }*/
     print_r($_FILES);
     echo '<br><br>';
          if ($model->load(Yii::$app->request->post())) {
              var_dump(Yii::$app->request->post());
              echo '<br><br>';
              
            $files = UploadedFile::getInstance($model, 'files');
            
            print_r($files);
             // die();
            
            if (!is_null($files)) {
                $name = explode(".", $files->name);
                $ext = end($name);
                $model->file = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesFiles = Yii::$app->basePath . '/web/resourcesFiles/office/';
                $path = $resourcesFiles . $model->file;
                if ($files->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idfile]);
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
    public function actionUpdate($id)
    {
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
    public function actionDelete($id)
    {
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
    protected function findModel($id)
    {
        if (($model = File::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
