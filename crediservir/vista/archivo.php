<?php

require_once("../modelo/validarempleado.php");

 $despacho=new ValidarArticulo();
 $validando=$despacho->Validararticulo($_REQUEST['articulo_cod']);






echo "<table class='table table-bordered'>


<tr>

<td align='center' width='15%' >Codigo</td>
<td  align='center' width='70%'>Descripcion</td>
<td  align='center' width='15%'>Valor</td>
</tr>

";
 if($validando){

foreach($validando as $registro){
  echo "

<tr>

<td width='15%'><input type='text' name='codigo' class='form-control' value='".$registro['articulo_cod']."'</td>
<td width='70%'><input type='text' name='descripcion' class='form-control' value='".$registro['articulo_des']."'</td>
<td width='15%'><input type='text' name='valor' class='form-control' value='".$registro['articulo_val']."'</td>

</tr>

 ";
}

  }else{

echo "Articulo no creado";



}




echo'</table>';

?>