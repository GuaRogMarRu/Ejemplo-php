<?php
  

  $consulta=ModificarProfesor($_GET['id_prof']);

  function ModificarProfesor($id_prof)
  {
    include 'conexion.php';
   // $result ='SELECT * FROM profesor WHERE id_prof="$id_prof"';
    $res = $mysqli->query("SELECT * FROM profesor WHERE id_prof='$id_prof'");
    $filas=mysqli_fetch_assoc($res);

    return [
      $filas['id_prof'],
      $filas['Nomb'],
      $filas['Ape'],
      $filas['correo'],
      $filas['Usuario'],
      $filas['Pass']
    ];

  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Producto</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Producto</h1> </span>
  		<br>

	  <form action="modif_prof1.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="id_prof" value="<?php echo "$consulta[0]" ?>">

  		<label>Nombre:</label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo "$consulta[1]" ?>"><br>
  		
  		<label>Apellidos: </label>
  		<input type="text" id="apellidos" name="apellidos" value="<?php echo "$consulta[2]" ?>"><br>
  		
      <label>Correo: </label>
      <input type="text" id="correo" name="correo" value="<?php echo "$consulta[3]" ?>"><br>

  		<label>Usuario: </label>
      <input type="text" id="usuario" name="usuario" value="<?php echo "$consulta[4]" ?>"><br>

      <label>Contraseña: </label>
      <input type="text" id="contraa" name="contraa" value="<?php echo "$consulta[5]" ?>"><br>
      		
  		<br>
  		
      <input type="submit" value="modificar" name="modificar">

     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>