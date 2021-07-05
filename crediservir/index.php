

<HTML>

<head>
  <title>Crediservir</title>        
  <meta charset="utf-8">   

  <meta name="viewport" content="width=device-width, initial-scale=1"> 

  <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/img.css">
  <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/style.css">
  <link rel="stylesheet" href="bootstrap-3.3.7/dist/estilosB.css"> 


</head>

<body>


<div class="container">



<br>
<br>

<br>
<br>
   
<div id="img"><img  class="centrado"  src="../crediservir/bootstrap-3.3.7/dist/img/logo-juvenil.png" class="img-responsive" alt="Imagen responsive"></div>


<form action="controlador/control.php"  method="POST">
 

 <div class="form-group"> 
<label for="user">USUARIO</label>
<input type="text" name="usuario" placeholder="Ingresar usuario" class="form-control" autocomplete="off" />
 </div>

 <div class="form-group">
 <label for="clave">CONTRASEÑA</label>
 <input type="password" name="clave" placeholder="Ingresar contraseña" class="form-control"  autocomplete="off" />
 </div>

 <?php
       if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
          echo "<div style='color:red'>Usuario o contraseña no coinciden,por favor verifique</div>";
       }
     ?>
 


 <input class="btn btn-i" type="submit" name="login" id="login" value="ENTRAR"/>   
 <input name="opcion" type="hidden"  id="opcion" value="1"/> 


</form>


</div>

</body>
</HTML>