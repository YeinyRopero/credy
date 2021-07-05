


<?php


session_start();
$opcion=$_REQUEST['opcion'];


switch($opcion){
	
case 1:

require_once("../modelo/validarperfil.php");
		$validar=new Datosacceso();   
        $validar->setAcce_usuario($_REQUEST['usuario']);
		$validar->setAcce_clave($_POST['clave']);
        
if( $datos=$validar->validar()){

		    foreach($datos as $registro){

		     $_SESSION['funci_doc']=$registro['funci_doc'];
		      $_SESSION['funci_nombre']=$registro['funci_nombre'];
		       $_SESSION['acce_perfil']=$registro['acce_perfil'];
		     
		    }// cierra el for
	

          if($_SESSION['acce_perfil']=="administrador"){
			require_once("../vista/vista_administrador.php");

		}

			else if($_SESSION['acce_perfil']=="nada")
			require_once("../vista/");





}else{


  header("location: ../index.php?fallo=true");


}// cierra el else principal

break;



case 2:


require_once("../modelo/validarempleado.php");

$datosarticulo=new ValidarArticulo();

$datosarticulo->setArticulo_cod($_REQUEST['articulo_cod']);
$datosarticulo->setArticulo_des($_REQUEST['articulo_des']);
$datosarticulo->setArticulo_val($_REQUEST['articulo_val']);
$datosarticulo->setArticulo_fec($_REQUEST['articulo_fec']);
$datosarticulo->setArticulo_est($_REQUEST['articulo_est']);
$datosarticulo->setFunci_doc($_REQUEST['funci_doc']);


$datosarticulo->insertarArticulo();//funcion empleado de validarempleado.php

 ?>
<script type="text/javascript">alert('Articulo Registrado correctamente');</script>
<?php


require_once("../vista/vista_administrador.php");




break;


}
?>










