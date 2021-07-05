<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use webvimark\modules\UserManagement\components\GhostMenu;
use webvimark\modules\UserManagement\UserManagementModule;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script defer="" src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
    </head>

    <style>
        .navbar-brand > img {
            display: initial;            
        }

        .navbar-brand{
            padding-top: 8px;
        }

        .imglogo{
            width: 50px;
        }

        .profile-icon {
            vertical-align: middle;
            height: 32px;
            width: 32px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }

        .pading{
            padding-bottom: 0px;
            padding-top: 10px;
        }
    </style>
    <link href="<?= Yii::$app->homeUrl; ?>css/NavbarStyle.css" rel="stylesheet" type="text/css"/>
    <body>
        <?php $this->beginBody() ?>

        <div id="idwrap" class="wrap">
            <?php
            NavBar::begin([
                //'brandImage' => Yii::$app->homeUrl . 'image/regcivil.svg',
                'brandLabel' => '<img src="' . Yii::$app->homeUrl . 'image/regcivil.svg' . '" alt="Logo" class="imglogo" style="margin-top: -7px; margin-right: 3px;">' . Yii::$app->name,
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            ?>
            <?=
            Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'encodeLabels' => false,
                'activateParents' => true,
                'items' => [
                        ['label' => '<i class="fas fa-home"></i> Inicio', 'url' => ['/site/index']],
                    Yii::$app->user->isGuest ? ('') : (
                                [
                                'label' => '<i class="fas fa-file-pdf"></i> Oficios',
                                'items' => [
                                        ['label' => '<i class="far fa-check-circle"></i> Evaluar Oficios', 'url' => ['/office/evaluate']],
                                        ['label' => '<i class="fas fa-upload"></i> Subir Oficios', 'url' => ['/office/upload']],
                                ],
                            ]),
                    Yii::$app->user->isSuperadmin ? (
                                [
                                'label' => '<i class="fas fa-users"></i> Usuarios',
                                'items' => [
                                        ['label' => 'Perfiles', 'url' => ['/profile/index']],
                                    '<li class="divider"></li>',
                                    '<li class="dropdown-header">Rutas Backend</li>',
                                        ['label' => '<i class="fa fa-angle-double-right"></i> ' . UserManagementModule::t('back', 'Users'), 'url' => ['/user-management/user/index']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> ' . UserManagementModule::t('back', 'Roles'), 'url' => ['/user-management/role/index']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> ' . UserManagementModule::t('back', 'Permissions'), 'url' => ['/user-management/permission/index']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> ' . UserManagementModule::t('back', 'Permission groups'), 'url' => ['/user-management/auth-item-group/index']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> ' . UserManagementModule::t('back', 'Visit log'), 'url' => ['/user-management/user-visit-log/index']],
                                    '<li class="divider"></li>',
                                    '<li class="dropdown-header">Rutas Frontend</li>',
                                        ['label' => '<i class="fa fa-angle-double-right"></i> Login', 'url' => ['/user-management/auth/login']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> Logout', 'url' => ['/user-management/auth/logout']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> Registration', 'url' => ['/user-management/auth/registration']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> Change own password', 'url' => ['/user-management/auth/change-own-password']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> Password recovery', 'url' => ['/user-management/auth/password-recovery']],
                                        ['label' => '<i class="fa fa-angle-double-right"></i> E-mail confirmation', 'url' => ['/user-management/auth/confirm-email']],
                                ],
                            ]) : (''),
                        ['label' => '<i class="far fa-address-card"></i> Contacto', 'url' => ['/site/contact']],
                        ['label' => '<i class="fas fa-question-circle"></i> Acerca de nosotros', 'url' => ['/site/about']],
                        [
                        'label' => '<i id="notificationsIcon" class="far fa-bell" aria-hidden="true"></i> '
                        . '<span id="notificationsBadge" class="badge badge-danger">'
                        . '<i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i>'
                        . '</span> Notificaciones',
                        'items' => [
                            '<li class="dropdown-header">Notificaciones</li>',
                                ['label' => '<i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Cargando las últimas notificaciones ...', 'url' => ['#']],
                                ['label' => 'No hay notificaciones nuevas', 'url' => ['#']],
                                ['label' => 'Ver todas las notificaciones', 'url' => ['/notifications/index'], 'options' => ['class' => 'backg']],
                        ],
                    ],
                    Yii::$app->user->isGuest ? (

                                ['label' => '<i class="far fa-user"></i> Iniciar Sesion', 'url' => ['/user-management/auth/login']]
                            ) : (
                                [
                                'label' => '<img class="profile-icon" src="' . Yii::$app->homeUrl . '/resourcesFiles/avatar/default/avatar1.png' . '">',
                                'items' => [
                                        ['label' => 'Perfil', 'url' => ['/dashboard/helpcenter']],
                                        ['label' => '<li class="divider"></li>'],
                                        ['label' => 'Cerrar Sesion', 'url' => ['/user-management/auth/logout']],
                                ],
                            ]
                            ),
                //['label' => '', ],
                ],
            ]);

            NavBar::end();
            ?>

            <div id="idcontainer" class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&REG; Instituto Tecnologico De Villahermosa <?= date('Y') ?></p>

                <p class="pull-right">Desarrollado por: 
                    <a href="//www.facebook.com/carlosdaniel.angelpadilla.3"><i class="fab fa-facebook-f"></i> Carlos Angel, </a>
                    <a href="//www.facebook.com/yesenia.diazhernandez.75"><i class="fab fa-facebook-f"></i> Yesenia Diaz, </a>
                    <a href="//www.facebook.com/lupita.gordillo.godez"><i class="fab fa-facebook-f"></i> Maria Gordillo.</a></p>                
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
