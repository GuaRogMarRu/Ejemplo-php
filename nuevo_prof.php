<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta Profesor</title>
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
  		<span> <h1>Alta Profesor</h1> </span>
  		<br>
	  <form action="nuevo_prof1.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

  		<label>Nombre: </label>
  		<input type="text" id="anombre" name="anombre" required="required"><br>
  		
  		<label>Apellido:</label>
  		<input type="text" id="aapellido" name="aapellido"  required="required"><br>
  		
  		<label>Correo: </label>
      <input type="text" id="acorreo" name="acorreo"  required="required"><br>

      <label>Usuario: </label>
      <input type="text" id="ausuario" name="ausuario"  required="required"><br>

      <label>Contraseña: </label>
      <input type="text" id="acontra" name="acontra"  required="required"><br>



<div id="contenido">
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <thead>
        <th>Nombre</th>
        <!--<th>Materia</th>-->
      </thead>

      <?php
      include "conexion.php";
      $sentencia='SELECT * FROM libro';

  $result = $mysqli->query($sentencia);

     // $mysqli = mysqli_query($sentencia);
      //$resultado=mysql_query($sentencia);



   /* foreach ($filas=mysqli_fetch_array($result) as $m_libro) {    

   //'<input type="checkbox" id="m_libro" value=$m_libro['id_libro']>$m_libro[nombre]'
      //echo $m_libro['id_libro'] . "hh" . $m_libro['nombre'];
      
    }*/

    while($filas=mysqli_fetch_assoc($result))
      {
        echo "<tr>";
       echo "<td>" . '<input type="checkbox" id="m_libro" name="id_libro" value="'.$filas['id_libro'].'">'. " " . $filas['nombre'] . " " .  $filas['materia'] . "</td>";
         // echo "<td>"; '<input type="checkbox" id="m_libro" value= echo $filas[nombre]>"$id_libro['nombre']" . "</td>";
        echo "</tr>";
      }

      /*while($filas=mysqli_fetch_assoc($result))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
        echo "</tr>";
      }*/

      ?>
    </table>
  </div>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Agregar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>