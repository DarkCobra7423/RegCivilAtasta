<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * EmailController implements the CRUD actions for Email model.
 */
class EmailController extends Controller {

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
     * Lists all Email models.
     * @return mixed
     */
    public function actionValidateemail() {
        //MAS INFORMACION...
        //https://github.com/yiisoft/yii2-swiftmailer
        //https://www.yiiframework.com/doc/guide/2.0/es/tutorial-mailing
        //USO BASICO

        Yii::$app->mailer->compose()
                ->setFrom('from@domain.com')
                ->setTo('to@domain.com')
                ->setSubject('Asunto del mensaje')
                ->setTextBody('Contenido en texto plano')
                ->setHtmlBody('<b>Contenido HTML</b>')
                ->send();


        //USO QUE PODRIA SERVIRNOS PERO NO ESTOY SEGURO
        /*
        $message = Yii::$app->mailer->compose();
        if (Yii::$app->user->isGuest) {
            $message->setFrom('from@domain.com');
        } else {
            $message->setFrom(Yii::$app->user->identity->email);
        }
        $message->setTo(Yii::$app->params['adminEmail'])
                ->setSubject('Asunto del mensaje')
                ->setTextBody('Contenido en texto plano')
                ->send();

        */
        //return $this->render('index', []);
        return true;
    }

}
