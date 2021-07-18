/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var homeurl;

function desktopNot(url){
    onNotificationButtonClick();
    homeurl = url;
}
           
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
	var notificacion = new Notification("Tiene Notificaciones Sin Abrir", {	    
            icon: '../../web/image/regcivil1.png',
            //icon: homeurl + 'image/regcivil1.png',
	    body: 'Abrir Bandeja De Notificaciones.'
	});

	// Redireccionamos a un determinado Destino o URL al hacer click en la Notificación
	notificacion.onclick = function() {
            //alert(homeurl);
		window.open(homeurl + "notifications/allnotifications");
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
}