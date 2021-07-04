<?php

namespace app\controllers;

use Yii;
use app\models\Officefile;
use app\models\OfficefileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OfficefileController implements the CRUD actions for Officefile model.
 */
class OfficefileController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Officefile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OfficefileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Officefile model.
     * @param integer $idoffice
     * @param integer $idfile
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idoffice, $idfile)
    {
        return $this->render('view', [
            'model' => $this->findModel($idoffice, $idfile),
        ]);
    }

    /**
     * Creates a new Officefile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Officefile();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idoffice' => $model->idoffice, 'idfile' => $model->idfile]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Officefile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $idoffice
     * @param integer $idfile
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idoffice, $idfile)
    {
        $model = $this->findModel($idoffice, $idfile);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idoffice' => $model->idoffice, 'idfile' => $model->idfile]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Officefile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $idoffice
     * @param integer $idfile
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idoffice, $idfile)
    {
        $this->findModel($idoffice, $idfile)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Officefile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $idoffice
     * @param integer $idfile
     * @return Officefile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idoffice, $idfile)
    {
        if (($model = Officefile::findOne(['idoffice' => $idoffice, 'idfile' => $idfile])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
