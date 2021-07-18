<?php

namespace app\controllers;

use Yii;
use app\models\Notifications;
use app\models\NotificationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NotificationsController implements the CRUD actions for Notifications model.
 */
class NotificationsController extends Controller {

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
     * Lists all Notifications models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new NotificationsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    public function actionNotifications() {

        $notifications = Notifications::find()->where(['AND', '`read` = 0', ['OR', 'fkprofile = ' . Yii::$app->profile->idprofile, 'fkadministrativeunit = ' . Yii::$app->profile->fkworksin]])->all();

        foreach ($notifications as $notification) {

            echo '<a class="dropdown-item dropdown-notification" href="' . Yii::$app->homeUrl . 'office/evaluating/' . $notification->fkoffice . '">
            <div class="notification-read">
                <!--<span class="fa fa-times" aria-hidden="true"></span>-->
            </div>
            <!--<img class="notification-img" src="#" alt="Notification" />-->
            <span class="notification-img" style="font-size: 30px;"><i class="fas fa-bell"></i></span>
            <div class="notifications-body">
                <p class="notification-texte">' . $notification->title . '</p>
                <p class="notification-date text-muted">
                    <i class="far fa-clock"></i> ' . $notification->datatime . '
                </p>
            </div>
        </a>';
        }
    }

    public function actionCountnotification() {
        //SELECT Count(*) AS counts FROM notifications WHERE fkprofile = 2 OR fkadministrativeunit = 1         

        $num = Notifications::find()->select('COUNT(*) AS number')->where(['AND', '`read` = 0', ['OR', 'fkprofile = ' . Yii::$app->profile->idprofile, 'fkadministrativeunit = ' . Yii::$app->profile->fkworksin]])->one();

        echo $num->number;
    }
    
    public function actionAllnotifications() {
        
        $alls = Notifications::find()->where(['OR', 'fkprofile = ' . Yii::$app->profile->idprofile, 'fkadministrativeunit = ' . Yii::$app->profile->fkworksin])->orderBy(['datatime' => SORT_DESC])->all();
        //$alls = Notifications::find()->all();
        
        return $this->render('allnotifications', [
                    'alls' => $alls,
        ]);
    }
    
    public function actionRead($id){
        $model = $this->findModel($id);  
        $model->read = '1';
        $model->save();
        $this->redirect(Yii::$app->homeUrl.'notifications/allnotifications');
    }

    public function actionDesktop() {
        //SELECT *  FROM `notifications` WHERE `read` = 0 AND `fkprofile` = 2 OR `fkadministrativeunit` = 1
                
        $desktops = Notifications::find()->where(['AND', '`read` = 0', ['OR', 'fkprofile = 2', 'fkadministrativeunit = 1']])->all();
        
        foreach ($desktops as $desktop) {
            
        }
        //echo $desktops;
        echo '/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onload = onNotificationButtonClick();

           
// Validamos y activamos el Permiso para Notificar
if(Notification.permission!=="granted") {
	Notification.requestPermission();
}

// var notificador = document.getElementById("notificadorThingy");

// Instanciamos el botón, para que al hacer Click en el, se proceda a lanzar la Notificación o un mensaje para actualizar el Navegador
// 
//document.getElementById("btn_notificar").addEventListener("click", onNotificationButtonClick);


// Validamos si el Navegador soporta las Notificaciones en HTML 5
function onNotificationButtonClick() {
	if (!isNotificationSupported()) {
		logg("Tu navegador no soporta Notificaciones. Por favor, utiliza una versión Reciente del Navegador Google Chrome o Safari.");
	return;
	}

	// Si el Navegador soporta las Notificaciones HTML 5, entonces que proceda a Notificar
	var notificacion = new Notification("Nuevas Notificaciones", {
	    
            icon: "../resources/img/logo1.png",
	    body: "Abrir Bandeja de Gmail Funciona este."
	});

	// Redireccionamos a un determinado Destino o URL al hacer click en la Notificación
	notificacion.onclick = function() {
		window.open("http://gmail.com/");
	};					
}
		
// Solicitamos los Permisos del Sistema
function requestPermissions() {

}

// Luego del Permiso del Sistema, le indicamos que nos Muestre la Notificación
function isNotificationSupported() {
	return ("Notification" in window);
}

// Mostramos el Mensaje de la Notificación
function logg(mensaje) {
	notificador.innerHTML += "<p>"+mensaje+"</p>";
}';
    }

    /**
     * Displays a single Notifications model.
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
     * Creates a new Notifications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new Notifications();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idnotifications]);
        }

        return $this->render('create', [
                    'model' => $model,
        ]);
    }

    /**
     * Updates an existing Notifications model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->idnotifications]);
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Notifications model.
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
     * Finds the Notifications model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notifications the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = Notifications::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
