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

class SiteController extends Controller {

    /**
     * {@inheritdoc}
     */
    public $freeAccess = true;
    
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
    
    public function actionCreateoffice() {
        
        //$units = Administrativeunit::find()->orderBy('RAND()')->all();
        $units = Administrativeunit::find()->all();
        
        $carousels = Administrativeunit::find()->orderBy('RAND()')->limit(3)->all();
        
        return $this->render('newoffice', ['units' => $units, 'carousels' => $carousels]);
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
