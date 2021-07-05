<?php

 class ValidarArticulo{
 	

private $nom;
private $ex;

private $articulo_cod;//quedaron asi por que no cambie las variable al editar
private $articulo_des;
 private $articulo_val;
private $articulo_fec;
 private $articulo_est;
 private $funci_doc;


  

//-----------------------------------------------------------------

public function getArticulo_cod(){
		return $this->articulo_cod;
		}
public function setArticulo_cod($articulo_cod){
		$this->articulo_cod=$articulo_cod;
		}


public function getArticulo_des(){
		return $this->articulo_des;
		}
public function setArticulo_des($articulo_des){
		$this->articulo_des=$articulo_des;
		}


public function getArticulo_val(){
		return $this->articulo_val;
		}
public function setArticulo_val($articulo_val){
		$this->articulo_val=$articulo_val;
		}


public function getArticulo_fec(){
		return $this->articulo_fec;
		}
public function setArticulo_fec($articulo_fec){
		$this->articulo_fec=$articulo_fec;
		}



public function getArticulo_est(){
		return $this->articulo_est;
		}
public function setArticulo_est($articulo_est){
		$this->articulo_est=$articulo_est;
		}



public function getFunci_doc(){
		return $this->funci_doc;
		}
public function setFunci_doc($funci_doc){
		$this->funci_doc=$funci_doc;
		}




public function __construct(){
	require_once('conectarbd.php');
	$this->db=conectarbd::conexion();

	$this->empleado=array();
	

	
}


//----------------------------------------funcion insertar-------------------------------------------------------








public function Validararticulo($articulo_cod){

		$sql="SELECT *FROM articulo WHERE   articulo_des   LIKE  '%$articulo_cod%'";

		$consulta=$this->db->query($sql);

		while( $fila=$consulta->fetch( PDO::FETCH_ASSOC ) ){
		

		  $this->nom[]=$fila;
		}
		return $this->nom;
		}



public  function insertarArticulo(){
	
	
	$sql="INSERT  INTO articulo


	     VALUES(

	    '$this->articulo_cod',
		'$this->articulo_des',
		'$this->articulo_val',
		'$this->articulo_fec',
		'inactivo',
		'$this->funci_doc')";

$insert=$this->db->query($sql);

	
		}


public function editarEmpleado(){


$sql="UPDATE empleado SET  	empl_nom='$this->empl_nom',
                            empl_ape='$this->empl_ape',
                            empl_cel='$this->empl_cel',
                            empl_tel='$this->empl_tel',
                            empl_dir='$this->empl_dir',                
                            empl_esc='$this->empl_esc',
                            empl_perfil='$this->empl_perfil',
                            empl_fecha_ing='$this->empl_fecha_ing',
                            empl_fecha_nac='$this->empl_fecha_nac',
                            empl_foto='$this->empl_foto'


                            WHERE empl_doc='$this->empl_doc'";


                      $update=$this->db->query($sql);


$sql="UPDATE acceso SET  	

                           acce_perfil='$this->empl_perfil'
                          


                            WHERE empl_doc='$this->empl_doc'";


                      $update=$this->db->query($sql);



		
		              return true;
		
		              }


 }//cierra la clase principal 

?>