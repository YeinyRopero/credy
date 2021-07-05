<?php


 class Datosacceso{
 	
	
private $acce_usuario;
	private $acce_clave;
	private $acce_perfil;
    private $acce_id;

	private $funci_doc;
    private $funci_nom;
	private $datos;

     

public function getAcce_usuario(){
		return $this->acce_usuario;
		}
public function setAcce_usuario($acce_usuario){
		$this->acce_usuario=$acce_usuario;
		}



public function getAcce_clave(){
		return $this->acce_clave;
		}
public function setAcce_clave($acce_clave){
		$this->acce_clave=$acce_clave;
		}

public function getAcce_perfil(){
		return $this->acce_perfil;
		}
public function setAcce_perfil($acce_perfil){
		$this->acce_perfil=$acce_perfil;
		}


public function getAcce_id(){
		return $this->acce_id;
		}
public function setAcce_id($acce_id){
		$this->acce_id=$acce_id;
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
	
}


//-----------------------------------------------------------------------------------------------

public  function validar(){//hacer esto  en validar peril banco y crearbase dedatos
	
	
	$sql="SELECT funcionario.funci_doc, funcionario.funci_nombre,  funcionario.funci_perfil,acceso.acce_perfil 
	      FROM funcionario,acceso 


		 WHERE acceso.funci_doc=funcionario.funci_doc 

		 AND   acceso.acce_usuario= BINARY '$this->acce_usuario' 

		 and  acceso.acce_clave=BINARY '$this->acce_clave'";


	
	$consulta=$this->db->query($sql);
	
	while ($fila=$consulta->fetch(PDO::FETCH_ASSOC)){
		
		$this->datos[]=$fila;
		
		}
		
		return $this->datos;
 
}
     
     
     
 }//cierra cla principal datosacceso

?>

