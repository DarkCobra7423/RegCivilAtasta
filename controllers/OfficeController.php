<?php

namespace app\controllers;

use Yii;
use app\models\Office;
use app\models\OfficeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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
        die();*/

        return $this->render('filter', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }
    
    public function actionUpload() {

        $model = new Office();
        //print_r($_POST);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->idoffice]);
            //$sends = Office::find()->select('expedient')->where(['idoffice' => $model->idoffice])->one();
            //print_r($send); die();
            return $this->redirect(['uploadconfirm', 'id' => $model->idoffice]);
        }

        return $this->render('upload', [
                    'model' => $model,
                    'sends' => NULL,
        ]);
    }
    
    public function actionUploadconfirm($id) {

        $model = new Office();
        //print_r($_POST);
        //if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['view', 'id' => $model->idoffice]);
            $sends = Office::find()->select('expedient')->where(['idoffice' => $id])->one();
            //print_r($send); die();
            return $this->render('upload', [
                    'model' => $model,
                    'sends' => $sends,
        ]);
        //}
        /*
        return $this->render('upload', [
                    'model' => $model,
                    'sends' => NULL,
        ]);*/
    }
    
    public function actionEvaluate() {
        
        $offices = Office::find()->where(['AND','fkadministrativeunit = '.Yii::$app->profile->fkworksin, 'fkstateoffice = 2 OR fkstateoffice = 3'])->all();
        $formes = Office::find()->where(['AND','fkadministrativeunit = '.Yii::$app->profile->fkworksin, 'fkstateoffice = 2 OR fkstateoffice = 3', 'fkto = '.Yii::$app->profile->idprofile])->all();
        
        return $this->render('evaluate', [
                    'offices' => $offices,                    
                    'formes' => $formes,                    
        ]);
    }
    
    public function actionEvaluating($id){
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idoffice]);
        }

        return $this->render('evaluating', [
                    'model' => $model,
        ]);
    }
    
    public function actionWorksin($unit){
        $tos = \app\models\Profile::find()->where(['fkworksin' => $unit])->all();
        echo "<option value=''>Selecione uno...</option>\n";
        foreach ($tos as $to){
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
