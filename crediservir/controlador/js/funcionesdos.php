
function modificararticulo(){



var parametros = {};

$.ajax({



     data:parametros,
     url:"../vista/Formulariomodificar.php",
     type:"POST",
     beforeSend: function(){
	 $("#ventana").html("Procesando...");
},
2.
success: function(vista){

	$("#ventana").html(vista);
}


});



}