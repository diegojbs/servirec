var sonido = document.getElementById("sonido"); 

$(".nav-item").on("click", function(){
    $("#menumovil").addClass("collapsed");
    $("#navbarNav1").removeClass("show");
});

$("#abreModal").on("click", function(){
  $('#myModal').modal('show');
  console.info("Presionado");
});

$(document).ready(

  // function() { 

  //   $("html").niceScroll();

  // };

  //esconder menu mobil onclic en item

  

  $(".peticion").on("submit", function(ev){
  	ev.preventDefault();

  	var $form = $(this);

  	var $button = $form.find("[type='submit']");

  	

  	//Petición AJAX

  	$.ajax({
  		url: $form.attr("action"),
  		method: $form.attr("method"),
  		data: $form.serialize(),
  		dataType: "JSON",
  		beforeSend: function(){
  			$button.val("Cargando...");
  		},
  		success: function(data){
  			// $button.css("background-color", "green").val("DATOS RECIBIDOS");
  			$button.val("¡DATOS ENVIADOS!");

  			console.info(data);

  			// setTimeout(function(){
  			// 	resetBoton($button);
  			// }, 3000);

  			sonar();
  			$form[0].reset();
        $('#myModal').modal('show');
  		},
  		error: function(err){
  			console.log(err);
  			// $button.css("background-color", "red").val("Hubo un error");
  			$button.val("Hubo un error");

  			setTimeout(function(){
  				resetBoton($button);
  			}, 3000);
  		},
  	});
  	return false;
  })

);

function resetBoton($button){
  	$button.val("Enviar").attr("style", "");
 };

 function sonar(){
 	sonido.play();
 }
