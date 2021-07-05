


<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>





 <link rel="stylesheet" type="text/css"  href="../bootstrap-3.3.7/dist/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../vista/iconos/css/fontawesome-all.min.css">

<script src="../bootstrap-3.3.7/dist/js/jquery.min.js"></script>


<script src="../bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>


<script type="text/javascript" src ="../controlador/js/jquery-3.1.1.min.js"></script>

<script type="text/javascript" src ="../controlador/js/funciones.js"></script>




<script type="text/javascript">


addEvent(window,'load',inicializarEventos,false);
var conexion1;



function  validarUsuario() 
{  

  conexion1=crearXMLHttpRequest();
  conexion1.onreadystatechange = procesarEventos;
  conexion1.open('GET','../vista/archivo.php?articulo_cod='+document.getElementById('articulo_cod').value, true);
  conexion1.send(null);
  }


  ////////////////////////////////////////////////

function procesarEventos()
{
  var existe = document.getElementById("existe");
  if(conexion1.readyState == 4)
  {
    existe.innerHTML = conexion1.responseText;


  } 
  else 
  {
    existe.innerHTML = 'Cargando...';
  }
}
//Funciones comunes a todos los problemas
//***************************************
function addEvent(elemento,nomevento,funcion,captura)
{ if (elemento.attachEvent)  {
    elemento.attachEvent('on'+nomevento,funcion);
    return true;  }
  else  
    if (elemento.addEventListener)
    { elemento.addEventListener(nomevento,funcion,captura);
      return true;    }
    else
      return false;}
function crearXMLHttpRequest() 
{ var xmlHttp=null;
  if (window.ActiveXObject) 
    xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
  else 
    if (window.XMLHttpRequest) 
      xmlHttp = new XMLHttpRequest();
  return xmlHttp;
}

</script>

  <body>


<div id="ventana">
<div class="container">


<h1>Modulo articulos</h1>


<br><br><br><br>


    
<table class="table table-bordered">

  <tr><td  align="center" width="100%"  colspan="3">Gestionar articulos</td></tr>
   <tr><td  align="center" width="100%" colspan="3">Datos busqueda</td></tr>

 <tr>
<td  align="center" width="80%">Descripcion articulo</td>  
<td  align="center" width="10%">Activo </td> 
<td  align="center" width="10%"> </td>  
</tr>



 <tr>

 <td  align="center" width="80%"><input  type="text" maxlength="50" name="articulo_cod" id="articulo_cod"    class="form-control" required autocomplete="off" /></td> 

<td  align="center" width="10%"><input  type="checkbox" /></td> 

<td  align="center" width="10%"><a href="#" onclick="validarUsuario()"> <i class=" glyphicon glyphicon-search"></i></a></td>  
</tr>


 <tr>
 <td  align="center" width="100%" colspan="3">Listado de articulos</td></tr>

 <tr><td  align="center" width="100%" colspan="3"><div id="existe"></div></td></tr>



</table>

<td><button   class="btn" id='derecha' onclick ='agregararticulo()';>Agregar</button></td> 

<td><button   class="btn" id='derechados' onclick ='modificararticulo()';>Modificar</button></td> 


</div> 


<style type="text/css">
  #derecha{
    float:right;
  }



<style type="text/css">
  #derechados{
    float:right;
  }



</div>

</body>
</html>