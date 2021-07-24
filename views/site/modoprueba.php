<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="container">



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
<!----------------------------------------------->

<!------------DropOriginal----------------------------------->

<li class="dropdown">

  <a id="notifications-dropdown" class="dropdown-toggle" href="#" data-toggle="dropdown"> 
  <i id="notificationsIcon" class="far fa-bell" aria-hidden="true"></i>
 <span id="notificationsBadge" class="badge badge-danger">
  <i class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> 
</span> Notificaciones 
<span class="caret"></span>
</a>

<ul id="w4" class="dropdown-menu">
  
  <li class="dropdown-header">Notificaciones </li>

  <li>
    <a href="#" tabindex="-1"><a id="notificationsLoader" href="#" class="dropdown-item dropdown-notification">

        <p class="notification-solo text-center"><i id="notificationsIcon" class="fa fa-spinner fa-pulse fa-fw" aria-hidden="true"></i> Cargando las últimas notificaciones ...</p>
      </a></a>
  </li>

  <li>
    <a id="notificationAucune" class="dropdown-item dropdown-notification" href="#">
        <p class="notification-solo text-center">No hay notificaciones nuevas</p>
      </a>
  </li>
  <li class="backg">
    <a href="" tabindex="-1"> Ver todas las notificaciones</a>
  </li>
</ul>

</li>


<!----------------------------------------------->
<br>



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





<br>
<br>
<br>




    <style type="text/css">
        .dropdown-item.dropdown-notification:active, .dropdown-item.dropdown-notification.active {
  color: #1d1e1f;
  text-decoration: none;
  background-color: #f7f7f9;
}

.dropdown-notification:hover .notification-read {
  color: #34495E;
}

.dropdown-notification-all {
  text-align: center;
  padding-top: 5px;
  padding-bottom: 5px;
  font-style: oblique;
  background-color: #34495E;
  color: white;
}

.dropdown-notification-all:hover {
  background-color: #34495E;
  color: white;
}

.notifications-container {
  max-height: 300px;
  overflow: auto;
}

.notification-dropdown-menu {
  padding-bottom: 0;
  min-width: 528px;
}

.notification-img {
  width: 48px;
  display: inline-block;
  vertical-align: top;
}

.notifications-body {
  display: inline-block;
}

.notification-texte {
  text-align: left;
  margin: 0;
}

.notification-read {
  margin: 0;
  height: 48px;
  vertical-align: top;
  line-height: 48px;
  padding-left: 15px;
  color: white;
  float: right;
}

.notification-date {
  text-align: left;
  color: #2980b9;
  margin: 0;
}

.notification-solo {
  margin-top: 1rem;
}

.notification-unread {
  text-decoration: none;
  background-color: #f7f7f9;
}

    </style>
    
  
<!-- Font-Awesome -->
<script src="https://use.fontawesome.com/48bbc759d5.js"></script>

<script type="text/javascript">
$(function () { 

  var count = 6;
  var lastCount = 0;

  // Pour la maquette
  var notifications = new Array();
  notifications.push({
    href: "#",
    image: "Modification",
    texte: "Votre incident " + makeBadge("17-0253") + " a été modifié",
    date: "Mercredi 10 Mai, à 9h53"
  });
  notifications.push({
    href: "#",
    image: "Horloge",
    texte: "Vous avez " + makeBadge("13") + " incidents en retards",
    date: "Mercredi 10 Mai, à 8h00"
  });
  notifications.push({
    href: "#",
    image: "Visible",
    texte: "Un nouvel incident dans votre groupe " + makeBadge("réseau"),
    date: "Mardi 9 Mai, à 18h12"
  });
  notifications.push({
    href: "#",
    image: "Ajout",
    texte: "Ouverture du problème " + makeBadge("17-0008"),
    date: "Mardi 9 Mai, à 15h23"
  });
  notifications.push({
    href: "#",
    image: "Annulation",
    texte: "Clotûre du problème " + makeBadge("17-0007"),
    date: "Mardi 9 Mai, à 12h16"
  });
  notifications.push({
    href: "#",
    image: "Recherche",
    texte: "Ouverture de l'incident " + makeBadge("17-1234") + " depuis le portail web",
    date: "Mardi 9 Mai, à 10h14"
  });

  function makeBadge(texte) {
    return "<span class=\"badge badge-default\">" + texte + "</span>";
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
      }
      else {
        $("#notificationsBadge").html(count);
        if (count > 0) {
          $("#notificationsIcon").removeClass("fa-bell-o");
          $("#notificationsIcon").addClass("fa-bell");
          $("#notificationsBadge").show();
          // Mobile
          $("#notificationsIconMobile").removeClass("fa-bell-o");
          $("#notificationsIconMobile").addClass("fa-bell");
          $("#notificationsBadgeMobile").show();
        }
        else {
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
        }
        else {
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
        $("#notificationsBadge").html(count);
        appNotifications.badgeLoadingMask(false);
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
        for (i = 0; i < count; i++) {

          var template = $('#notificationTemplate').html();
          template = template.replace("{{href}}", notifications[i].href);
          template = template.replace("{{image}}", notifications[i].image);
          template = template.replace("{{texte}}", notifications[i].texte);
          template = template.replace("{{date}}", notifications[i].date);

          $('#notificationsContainer').append(template);
        }

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

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>

<link href="<?= Yii::$app->homeUrl ?>css/emailStyle.css" rel="stylesheet" type="text/css"/>
<img src="../../web/image/regcivil1.png" alt=""/>


<div class ="container">
    
    
    
    
    
    
    
    <div style="margin:0;padding:0">
  <table align="center" border="0" cellpadding="0" cellspacing="0" width="310" style="border-collapse:collapse;width:310px;margin:0 auto">
    <tbody>
      <tr style="page-break-before:always">
        <td align="center" id="m_3193616724511801997m_9072162798162753153firefox-logo" style="padding:20px 0">
          <img src="#" height="60" width="60" alt="" class="CToWUd">

        </td>
      </tr>

      <tr style="page-break-before:always">
        <td valign="top">
          <h1 style="font-family:sans-serif;font-size:21px;line-height:29px;font-weight:normal;margin:0 0 11px 0;text-align:center">¿Es su correo electrónico?</h1>

          <p style="font-family:sans-serif;font-size:13px;line-height:20px;font-weight:normal;margin:0 0 24px 0px;text-align:center;color:#4a4a4f">

            Porfavor! Ingrese este codigo que se le pide para continuar con el envío del oficio.
          </p>
        </td>
      </tr>

      <tr style="page-break-before:always">
        <td valign="top">
          <p style="font-family:sans-serif;font-size:14px;line-height:21px;font-weight:normal;margin:0 0 21px 0;text-align:center">
            En caso afirmativo, aquí está el código de verificación:
          </p>

          <p style="font-family:monospace!important;font-size:32px;line-height:26px;font-weight:normal;margin:0 0 24px 0;text-align:center">668200</p>

          <p style="font-family:sans-serif;font-size:14px;line-height:21px;font-weight:normal;margin:0 0 21px 0;text-align:center">
            Caduca en 5 minutos.
          </p>
        </td>
      </tr>

      <tr style="page-break-before:always">
        <td border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
          <p style="font-family:sans-serif;font-weight:normal;margin:24px 0 12px 0;text-align:center;color:#737373;font-size:11px;line-height:18px;width:310px!important;word-wrap:break-word">
            Este es un correo electrónico automatizado; si no autorizaste esta acción, entonces <a href="//support.google.com/mail/answer/41078?hl=es&co=GENIE.Platform%3DDesktop" style="color:#0a84ff;text-decoration:none;font-family:sans-serif" rel="noreferrer"> por favor cambia tu contraseña</a>.
            Para más información, por favor visita <a href="<?= Yii::$app->homeUrl ?>" style="color:#0a84ff;text-decoration:none;font-family:sans-serif" rel="noreferrer">Sistema de correspondencia</a>.
          </p>
        </td>
      </tr>

    </tbody>
  </table>
  <div class="yj6qo"></div>
  <div class="adL">
  </div>
</div>
    
    
    
    
    
    
    
    
</div>
