<?php

namespace app\controllers;

use Yii;
use app\models\Profile;
use app\models\ProfileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use webvimark\components\AdminDefaultController;
use webvimark\modules\UserManagement\models\User;
use webvimark\modules\UserManagement\models\search\UserSearch;
use yii\web\UploadedFile;

/*
  use webvimark\components\AdminDefaultController;
  use Yii;
  use webvimark\modules\UserManagement\models\User;
  use webvimark\modules\UserManagement\models\search\UserSearch;
  use yii\web\NotFoundHttpException;
 */

/**
 * ProfileController implements the CRUD actions for Profile model.
 */
class ProfileController extends Controller {

    /**
     * {@inheritdoc}
     */
    ////////IMPORTANTE///////////
    //En caso de error revisar que exista la siguiente funcion en:
    //  \vendor\yiisoft\yii2\web\Application.php
    /*
      public function getProfile() {
      $idprofile = \app\models\Profile::find()->where(['fkuser' => \Yii::$app->user->id])->one();

      return $idprofile;
      }
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
     * Lists all Profile models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new ProfileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionProfile() {
        $model = $this->findModel(Yii::$app->profile->idprofile);

        $modelUser = User::findOne(Yii::$app->profile->fkuser);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            //return $this->redirect(['profile', 'id' => $model->idprofile]);
            return $this->redirect(['site/index']);
        }

        return $this->render('profile', [
                    'model' => $model,
                    'modelUser' => $modelUser,
        ]);
    }

    public function actionProfiles() {

        $profiles = Profile::find()->all();

        return $this->render('profiles', [
                    'profiles' => $profiles,
        ]);
    }

    public function actionNewprofile() {

        $model = new Profile();

        $modelUser = new User(['scenario' => 'newUser']);

        if ($modelUser->load(Yii::$app->request->post()) && $modelUser->save()) {

            $model->fkuser = "{$modelUser->id}";
            ////////////////////////////
            if ($model->load(Yii::$app->request->post())) {
                $avatars = UploadedFile::getInstance($model, 'avatars');
                if (!is_null($avatars)) {
                    $name = explode(".", $avatars->name);
                    $ext = end($name);
                    $model->photo = Yii::$app->security->generateRandomString() . ".{$ext}";
                    $resourcesFiles1 = Yii::$app->basePath . '/web/resourcesFiles/avatar/';
                    $path = $resourcesFiles1 . $model->photo;
                    if ($avatars->saveAs($path)) {
                        if ($model->save()) {
                            return $this->redirect(['view', 'id' => $model->idprofile]);
                        }
                    }
                } else {
                    $model->photo = "default.png";
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idprofile]);
                    }
                }
            }
            ///////////////////////////
            /*
              if ($model->load(Yii::$app->request->post()) && $model->save()) {
              return $this->redirect(['view', 'id' => $model->idprofile]);
              } */
        }


        return $this->render('newprofile', [
                    'model' => $model,
                    'modelUser' => $modelUser,
        ]);
    }

    public function actionViewprofile($id) {
        return $this->render('viewprofile', [
                    'model' => $this->findModel($id),
        ]);
    }

    public function actionUpdateprofile($id) {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post())) {
            $avatars = UploadedFile::getInstance($model, 'avatars');
            if (!is_null($avatars)) {
                $name = explode(".", $avatars->name);
                $ext = end($name);
                $model->photo = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesFiles1 = Yii::$app->basePath . '/web/resourcesFiles/avatar/';
                $path = $resourcesFiles1 . $model->photo;
                if ($avatars->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['viewprofile', 'id' => $model->idprofile]);
                    }
                }
            }else{
                $model->photo = "default.png";
                if ($model->save()) {
                        return $this->redirect(['viewprofile', 'id' => $model->idprofile]);
                    }
            }
        }
        /*
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['viewprofile', 'id' => $model->idprofile]);
        }*/

        return $this->render('updateprofile', [
                    'model' => $model,
        ]);
    }

    /**
     * Displays a single Profile model.
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
     * Creates a new Profile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Profile();
        /*   if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->idprofile]);
          } */
        if ($model->load(Yii::$app->request->post())) {
            $avatars = UploadedFile::getInstance($model, 'avatars');
            if (!is_null($avatars)) {
                $name = explode(".", $avatars->name);
                $ext = end($name);
                $model->photo = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesFiles1 = Yii::$app->basePath . '/web/resourcesFiles/avatar/';
                $path = $resourcesFiles1 . $model->photo;
                if ($avatars->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idprofile]);
                    }
                }
            }
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Profile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->idprofile]);
          } */
        if ($model->load(Yii::$app->request->post())) {
            $avatars = UploadedFile::getInstance($model, 'avatars');
            if (!is_null($avatars)) {
                $name = explode(".", $avatars->name);
                $ext = end($name);
                $model->photo = Yii::$app->security->generateRandomString() . ".{$ext}";
                $resourcesFiles1 = Yii::$app->basePath . '/web/resourcesFiles/avatar/';
                $path = $resourcesFiles1 . $model->photo;
                if ($avatars->saveAs($path)) {
                    if ($model->save()) {
                        return $this->redirect(['view', 'id' => $model->idprofile]);
                    }
                }
            }
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Profile model.
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
     * Finds the Profile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Profile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
