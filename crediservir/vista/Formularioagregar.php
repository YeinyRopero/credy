

<!DOCTYPE html>
<html>
<head>
  <title></title>



<script type="text/javascript">

function enviar1(){
document.f1.submit()

}
</script>






</head>
<body>



<div class="container">

<form action="#" method="POST" >
<?php
 session_start();

?>

<h1> Agregar articulo</h1>


<br><br><br><br>


<table class="table table-bordered">


 <tr><td  align="center" width="100%" colspan="3">Listado de articulos</td></tr>


<tr>

<td  align="center" width="15%">Codigo</td>
<td  align="center" width="70%">Descripcion</td>
<td  align="center" width="15%">Valor</td>
<td  style='display: none;'  align="center" width="10%">fecha</td>
<td  style='display: none;'  align="center" width="15%">estado</td>
<td  style='display: none;'  align="center" width="15%">funcionario</td>
</tr>


<tr>
<td align="center" width="15%">
	<input  class="form-control" type="text" maxlength="15" name="articulo_cod"  onchange="validarUsuario()" required autocomplete="off"> 
	<span id="existe"></span></td>




<td align="center" width="70%"><input  class="form-control" type="text"  maxlength="100" name="articulo_des" required autocomplete="off"></td>


<td align="center" width="15%"><input  class="form-control" type="text"  name="articulo_val" required autocomplete="off"></td>


<td style='display: none;' align="center" width="15%"><input  class="form-control" type="text"  name="articulo_fec" id="datepicker"   value="<?php date_default_timezone_set("America/Bogota"); echo $fecha=date("Y-m-d"); ?>"></td>


<td style='display: none;' align="center" width="15%"><input  class="form-control" type="text"  name="articulo_est" value=""></td>


<td style='display: none;' align="center" width="12%"><input  class="form-control" type="text"  name="funci_doc" value="<?php echo $_SESSION['funci_doc'];?>"></td>

</tr>

</table>


<div class="">
      <h1><button  id="derecha"  type="submit" class="btn btn-secondary btn-sm">Guardar</button></h1>
      <input type="hidden" name="opcion" value="2" >
      </div>



<style type="text/css">
  #derecha{
    float:right;
  }

</form>



</div>
  </body>  
  </html>