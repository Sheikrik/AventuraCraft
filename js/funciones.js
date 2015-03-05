// Funcion especifica de la pasarela de imagenes

$(function() {
	$("#rslides").responsiveSlides({
		pager: false,
		pause: true,
		speed: 2000,
		timeout: 6500
	});
});

// Evento que muestra y esconde la informacion acerca de los servicios

$(".staff figure").each(function(i){
	$("#staff_" + i).click(function(){
		$("#background_" + i).fadeIn(1000);
	});
});
$(".icon-close").click(function(){
	$(".presentacion_background").fadeOut(1000);
});

// Evento que muestra y esconde los submenus de "servidor"

$(".servidor").click(function(){
	$("#menu_servidor").slideToggle(1000);
});