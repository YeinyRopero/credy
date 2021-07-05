


function agregararticulo(){



var parametros = {};

$.ajax({



     data:parametros,
     url:"../vista/Formularioagregar.php",
     type:"POST",
     beforeSend: function(){
	 $("#ventana").html("Procesando...");
},

success: function(vista){

	$("#ventana").html(vista);
}


});



}