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
use app\models\Notifications;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
        <meta name="viewport" content = "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script defer="" src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
        <!--<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">-->
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
                                        ['label' => '<i class="fas fa-users"></i> Perfiles', 'url' => ['/profile/profiles']],
                                    '<li class="divider"></li>',
                                    '<li class="dropdown-header">Administrar Accesos</li>',
                                        ['label' => '<i class="fas fa-users"></i> ' . UserManagementModule::t('back', 'Users'), 'url' => ['/user-management/user/index']],
                                        ['label' => '<i class="fas fa-users-cog"></i> ' . UserManagementModule::t('back', 'Roles'), 'url' => ['/user-management/role/index']],
                                        ['label' => '<i class="fas fa-user-shield"></i> ' . UserManagementModule::t('back', 'Permissions'), 'url' => ['/user-management/permission/index']],
                                        ['label' => '<i class="fas fa-user-lock"></i> ' . UserManagementModule::t('back', 'Permission groups'), 'url' => ['/user-management/auth-item-group/index']],
                                        ['label' => '<i class="fas fa-clipboard-list"></i> ' . UserManagementModule::t('back', 'Visit log'), 'url' => ['/user-management/user-visit-log/index']],
                                ],
                            ]) : (''),
                    Yii::$app->user->isGuest ? (['label' => '<i class="far fa-address-card"></i> Contacto', 'url' => ['/site/contact']]) : (''),
                    Yii::$app->user->isGuest ? (['label' => '<i class="fas fa-question-circle"></i> Acerca de nosotros', 'url' => ['/site/about']]) : (''),
                    Yii::$app->user->isGuest ? ('') : (
                                [
                                'label' => '<i id="notificationsIcon" class="far fa-bell" aria-hidden="true"></i> '
                                . '<span id="notificationsBadge" class="badge badge-danger">'
                                . '<i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i>'
                                . '</span> Notificaciones',
                                'items' => [
                                    '<li class="dropdown-header">Notificaciones</li>',
                                        ['label' => '<a id="notificationsLoader" href="#" class="dropdown-item dropdown-notification">
                                            <p class="notification-solo text-center">
                                            <i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Cargando las últimas notificaciones ...</p>
                                            </a>', 'options' => ['class' => '']],
                                        ['label' => '<a id="notificationAucune" class="dropdown-item dropdown-notification" href="#">
                                                        <p class="notification-solo text-center">No hay notificaciones nuevas</p>
                                                    </a>', 'options' => ['id' => 'notificationsContainer']],
                                        ['label' => 'Ver todas las notificaciones', 'url' => ['/notifications/allnotifications'], 'options' => ['class' => 'dropdown-item dropdown-notification-all backg']],
                                ],
                                'options' => ['id' => 'notifications-dropdown'],
                            ]),
                    Yii::$app->user->isGuest ? (

                                ['label' => '<i class="far fa-user"></i> Iniciar Sesion', 'url' => ['/user-management/auth/login']]
                            ) : (
                                [
                                'label' => '<img class="profile-icon" src="' . Yii::$app->profile->avatar . '">', 'options' => ['class' => 'perzonalize'],
                                'items' => [
                                        ['label' => '<i class="far fa-user"></i> Perfil', 'url' => ['profile/profile']],
                                        ['label' => '<i class="fas fa-key"></i> Cambiar contraseña', 'url' => ['/user-management/auth/change-own-password']],
                                        ['label' => '<i class="far fa-check-circle"></i> Confirmación de E-mail', 'url' => ['/user-management/auth/confirm-email']],
                                        ['label' => '<i class="fas fa-sign-out-alt"></i> Cerrar Sesion', 'url' => ['/user-management/auth/logout']],
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

    <!-- TEMPLATE NOTIFICATION -->
    <!--
    <script id="notificationTemplate" type="text/html">
        <!-- NOTIFICATION --
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
    </script>-->
    <script src="<?= Yii::$app->homeUrl ?>js/notificationsdesktop.js" type="text/javascript"></script>
    
    
    <script type="text/javascript" id="iddesktop">
        
    </script>
    
    <script type="text/javascript">
$(function () {

    var count = 2;
    var lastCount = 0;

    // Pour la maquette
    //$.post(Yii::$app->homeUrl."office/worksin?unit="+$(this).val()
    /*
    console.log($.post("<? Yii::$app->homeUrl ?>notifications/not", function( data ) {
  alert( "Data Loaded: " + data );
}));*/
/*
var notifications = new Array();
//var notifications;

$.post("<? Yii::$app->homeUrl ?>notifications/not", function( data ) {
  
//notifications = new Array(data);
notifications.push({
     href: "#",
     image: "#aqui la imagen1111",
     texte: "Acta Nacimiento " + makeBadge("Pendiente"),
     date: "Mercredi 10 Mai, à 9h53"
   },);  
//console.log(data);
  //alert( "Data Loaded: " + data );

});
*/
    //console.log($.post("<? Yii::$app->homeUrl ?>notifications/not", function(data){}));
    //var notifications = new Array(data);
    /*
    var notifications = new Array(
            
            {
                "href": "#",
                "image": "#aqui la imagen",
                "texte": "Acta Nacimiento " + makeBadge("Pendiente"),
                "date": "Mercredi 10 Mai, à 9h53"
                
            },            
    );*/


/*
    var notifications = new Array();
    
     notifications.push({
     href: "#",
     image: "#aqui la imagen",
     texte: "Acta Nacimiento " + makeBadge("Pendiente"),
     date: "Mercredi 10 Mai, à 9h53"
     },{
     href: "#",
     image: "#aqui la imagen",
     texte: "Acta Nacimiento " + makeBadge("Pendiente"),
     date: "Mercredi 10 Mai, à 9h53"
     },);
     

     console.log(notifications);
*/
     //console.log(notifications1);

    function makeBadge(texte) {
        return "<span class=\"badge badge-warning\">" + texte + "11</span>";
    }

    appNotifications = {

        // Initialisation
        init: function () {
            // On masque les éléments
            $("#notificationsBadge").hide();
            $("#notificationAucune").hide();

            // On bind le clic sur les notifications
            $("#notifications-dropdown").on('click', function () {

                var open = $("#notifications-dropdown").attr("aria-expanded");

                // Vérification si le menu est ouvert au moment du clic
                if (open === "false") {
                    appNotifications.loadAll();
                }

            });

            // On charge les notifications
            appNotifications.loadAll();

            // Polling
            // Toutes les 3 minutes on vérifie si il n'y a pas de nouvelles notifications
            setInterval(function () {
                appNotifications.loadNumber();
            }, 180000);

            // Binding de marquage comme lue desktop
            $('.notification-read-desktop').on('click', function (event) {
                appNotifications.markAsReadDesktop(event, $(this));
            });

        },

        // Déclenche le chargement du nombre et des notifs
        loadAll: function () {

            // On ne charge les notifs que si il y a une différence
            // Ou si il n'y a aucune notifs
            if (count !== lastCount || count === 0) {
                appNotifications.load();
            }
            appNotifications.loadNumber();

        },

        // Masque de chargement pour l'icône et le badge
        badgeLoadingMask: function (show) {
            if (show === true) {
                $("#notificationsBadge").html(appNotifications.badgeSpinner);
                $("#notificationsBadge").show();
                // Mobile
                $("#notificationsBadgeMobile").html(count);
                $("#notificationsBadgeMobile").show();
            } else {
                //$("#notificationsBadge").html(count);
                $.post("<?= Yii::$app->homeUrl ?>notifications/countnotification", function( data ) {
                    //alert( "Data Loaded: " + data );                                        
                    $("#notificationsBadge").html(data);
                });
                if (count > 0) {
                    $("#notificationsIcon").removeClass("fa-bell-o");
                    $("#notificationsIcon").addClass("fa-bell");
                    $("#notificationsBadge").show();
                    // Mobile
                    $("#notificationsIconMobile").removeClass("fa-bell-o");
                    $("#notificationsIconMobile").addClass("fa-bell");
                    $("#notificationsBadgeMobile").show();
                } else {
                    $("#notificationsIcon").addClass("fa-bell-o");
                    $("#notificationsBadge").hide();
                    // Mobile
                    $("#notificationsIconMobile").addClass("fa-bell-o");
                    $("#notificationsBadgeMobile").hide();
                }

            }
        },

        // Indique si chargement des notifications
        loadingMask: function (show) {

            if (show === true) {
                $("#notificationAucune").hide();
                $("#notificationsLoader").show();
            } else {
                $("#notificationsLoader").hide();
                if (count > 0) {
                    $("#notificationAucune").hide();
                } else {
                    $("#notificationAucune").show();
                }
            }

        },

        // Chargement du nombre de notifications
        loadNumber: function () {
            appNotifications.badgeLoadingMask(true);

            // TODO : API Call pour récupérer le nombre

            // TEMP : pour le template
            setTimeout(function () {
                //$("#notificationsBadge").html(count);
                $.post("<?= Yii::$app->homeUrl ?>notifications/countnotification", function( data ) {
                    //alert( "Data Loaded: " + data );
                    //document.getElementById('notificationsBadge').innerHTML = data;
                    appNotifications.badgeLoadingMask(false);
                    $("#notificationsBadge").html(data);
                });
                
            }, 1000);
        },

        // Chargement de notifications
        load: function () {
            appNotifications.loadingMask(true);

            // On vide les notifs
            $('#notificationsContainer').html("");

            // Sauvegarde du nombre de notifs
            lastCount = count;

            // TEMP : pour le template
            setTimeout(function () {

                // TEMP : pour le template
                //notificationsContainer
                //document.getElementById('notificationsContainer').innerHTML = '<a class="dropdown-item dropdown-notification" href="#Url"><div class="notification-read"><i class="fa fa-times" aria-hidden="true"></i></div> <img class="notification-img" src="//placehold.it/48x48" alt="Icone" /><div class="notifications-body"><p class="notification-texte">Acta de nacimiento</p><p class="notification-date text-muted"><i class="fa fa-clock-o" aria-hidden="true"></i> 21/06/2121</p></div></a>';
                $.post("<?= Yii::$app->homeUrl ?>notifications/notifications", function( data ) {
                    //alert( "Data Loaded: " + data );
                    document.getElementById('notificationsContainer').innerHTML = data;
                    appNotifications.desktop();
                });
                
                /*
                for (i = 0; i < count; i++) {

                    var template = $('#notificationTemplate').html();
                    
                    template = template.replace("{{href}}", notifications[i].href);
                    template = template.replace("{{image}}", notifications[i].image);
                    template = template.replace("{{texte}}", notifications[i].texte);
                    template = template.replace("{{date}}", notifications[i].date);

                    $('#notificationsContainer').append(template);
                }
                */

                // On bind le marquage comme lue
                $('.notification-read').on('click', function (event) {
                    appNotifications.markAsRead(event, $(this));
                });

                // On arrête le chargement
                appNotifications.loadingMask(false);

                // On réactive le bouton
                $("#notifications-dropdown").prop("disabled", false);
            }, 1000);
        },
        
        desktop: function (){
        
        //window.onload = onNotificationButtonClick;
        window.onload = desktopNot('<?= Yii::$app->homeUrl ?>');
        /*
            $.post("<? Yii::$app->homeUrl ?>notifications/desktop", function( data ) {
                //data;
                console.log(data);
                    //alert( "Data Loaded: " + data );
                 document.getElementById('iddesktop').innerHTML = data;
                });*/
        },

        // Marquer une notification comme lue
        markAsRead: function (event, elem) {
            // Permet de garde la liste ouverte
            event.preventDefault();
            event.stopPropagation();

            // Suppression de la notification
            elem.parent('.dropdown-notification').remove();

            // TEMP : pour le template
            count--;

            // Mise à jour du nombre
            appNotifications.loadAll();
        },

        // Marquer une notification comme lue version bureau
        markAsReadDesktop: function (event, elem) {
            // Permet de ne pas change de page
            event.preventDefault();
            event.stopPropagation();

            // Suppression de la notification
            elem.parent('.dropdown-notification').removeClass("notification-unread");
            elem.remove();

            // On supprime le focus
            if (document.activeElement) {
                document.activeElement.blur();
            }

            // TEMP : pour le template
            count--;

            // Mise à jour du nombre
            appNotifications.loadAll();
        },

        add: function () {
            lastCount = count;
            count++;
        },

        // Template du badge
        badgeSpinner: '<i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i>'
    };

    appNotifications.init();

});
    </script>
   

</html>
<?php $this->endPage() ?>
