<?php

namespace app\controllers;

use Yii;
use app\models\Administrativeunit;
use app\models\AdministrativeunitSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * AdministrativeunitController implements the CRUD actions for Administrativeunit model.
 */
class AdministrativeunitController extends Controller
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
     * Lists all Administrativeunit models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AdministrativeunitSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionCreateunit()
    {
        $model = new Administrativeunit();

       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
        }*/
         if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstance($model, 'img');
            if (!is_null($img)) {
                $name = explode(".", $img->name);
                $ext = end($name);
                $model->image = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesUnit = Yii::$app->basePath . '/web/resourcesFiles/administrativeunit/';
                $path = $resourcesUnit . $model->image;
                if ($img->saveAs($path)) {
                    if ($model->save()) {
                        //return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
                        return $this->redirect(Yii::$app->homeurl);
                    }
                }
            }else{
                if ($model->save()) {
                        //return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
                        return $this->redirect(Yii::$app->homeUrl);
                    }
            }
        }

        return $this->render('createunit', [
            'model' => $model,
        ]);
    }
    
    public function actionUpdateunit($id)
    {
        $model = $this->findModel($id);

       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
        }*/
         if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstance($model, 'img');
            if (!is_null($img)) {
                $name = explode(".", $img->name);
                $ext = end($name);
                $model->image = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesUnit = Yii::$app->basePath . '/web/resourcesFiles/administrativeunit/';
                $path = $resourcesUnit . $model->image;
                if ($img->saveAs($path)) {
                    if ($model->save()) {
                        //return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
                        return $this->redirect(Yii::$app->homeUrl);
                    }
                }
            }else{
                if ($model->save()) {
                        //return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
                        return $this->redirect(Yii::$app->homeUrl);
                    }
            }
        }

        return $this->render('createunit', [
            'model' => $model,
        ]);
    }


    /**
     * Displays a single Administrativeunit model.
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
     * Creates a new Administrativeunit model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Administrativeunit();

       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
        }*/
         if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstance($model, 'img');
            if (!is_null($img)) {
                $name = explode(".", $img->name);
                $ext = end($name);
                $model->image = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesUnit = Yii::$app->basePath . '/web/resourcesFiles/administrativeunit/';
                $path = $resourcesUnit . $model->image;
                if ($img->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
                    }
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Administrativeunit model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idadministrativeunit]);
        }*/
         if ($model->load(Yii::$app->request->post())) {
            $img = UploadedFile::getInstance($model, 'img');
            if (!is_null($img)) {
                $name = explode(".", $img->name);
                $ext = end($name);
                $model->image = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesUnit = Yii::$app->basePath . '/web/resourcesFiles/administrativeunit/';
                $path = $resourcesUnit . $model->image;
                if ($img->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idadministrativeunit]);                        
                    }
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Administrativeunit model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        
        $urlimagen = "resourcesFiles/administrativeunit/".$model->image;
        
        if(file_exists($urlimagen)){
            unlink($urlimagen);
        }
        
        $model->delete();

        //return $this->redirect(['index']);
        return $this->redirect(Yii::$app->homeUrl);
    }

    /**
     * Finds the Administrativeunit model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Administrativeunit the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Administrativeunit::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
