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
class NotificationsController extends Controller
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
     * Lists all Notifications models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NotificationsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function navnotifications(){
        ?>
        <!------------------MODERNO------------------------->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<li class="dropdown nav-button notifications-button hidden-sm-down">
  <a id="notifications-dropdown" class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i id="notificationsIcon" class="far fa-bell" aria-hidden="true"></i>

    <span id="notificationsBadge" class="badge badge-danger"><i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i></span> Efecto Oficios

    <span class="caret"></span>
  </a>
  <!--A-->

  <ul id="w4" class="dropdown-menu notification-dropdown-menu" aria-labelledby="notifications-dropdown">
    <li class="dropdown-header">Notificaciones</li>
    <!--Termina la cabecera-->
    <!-- CHARGEMENT -->
    <li>
      <a id="notificationsLoader" href="#" class="dropdown-item dropdown-notification">

        <p class="notification-solo text-center"><i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Cargando las últimas notificaciones ...</p>
      </a>
    </li>

    <li id="notificationsContainer" class="notifications-container">

      <a id="notificationAucune" class="dropdown-item dropdown-notification" href="#">
        <p class="notification-solo text-center">No hay notificaciones nuevas</p>
      </a>

      <a class="dropdown-item dropdown-notification-all" href="#">
        Ver todas las notificaciones
      </a>

    </li>
    <!--
<li class="backg">
  <a href="#" tabindex="-1">Ver todas las notificaciones</a>
</li>-->
  </ul>

</li>

<!-- TEMPLATE NOTIFICATION -->
<script id="notificationTemplate" type="text/html">
  <!-- NOTIFICATION -->
<a class="dropdown-item dropdown-notification" href="{{href}}">
  <div class="notification-read">
    <i class="fa fa-times" aria-hidden="true"></i>
  </div>
  <img class="notification-img" src="//placehold.it/48x48" alt="Icone" />
  <div class="notifications-body">
    <p class="notification-texte">{{texte}}</p>
    <p class="notification-date text-muted">
      <i class="fa fa-clock-o" aria-hidden="true"></i> {{date}}
    </p>
  </div>
</a>
</script>

<!----------------------------------------------->
        <?php
        return $dropnotification;
    }

    /**
     * Displays a single Notifications model.
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
     * Creates a new Notifications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
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
    public function actionUpdate($id)
    {
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
    public function actionDelete($id)
    {
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
    protected function findModel($id)
    {
        if (($model = Notifications::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
