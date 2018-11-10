<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>Nombre</th>
  			<th>Apellido</th>
  			<th>Correo</th>
  			<th> <a href="nuevo_prof.php"> <button type="button" class="btn btn-info">Agregar</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia='SELECT * FROM profesor WHERE Estatus =1';

  $result = $mysqli->query($sentencia);

     // $mysqli = mysqli_query($sentencia);
      //$resultado=mysql_query($sentencia);
      while($filas=mysqli_fetch_assoc($result))
      {
        echo "<tr>";
          echo "<td>"; echo $filas['Nomb']; echo "</td>";
          echo "<td>"; echo $filas['Ape']; echo "</td>";
          echo "<td>"; echo $filas['correo']; echo "</td>";
          echo "<td>  <a href='detalles_prof.php?id_prof=".$filas['id_prof']."'> <button type='button' class='btn btn-success'>Detalles</button> </a> </td>";
          echo "<td>  <a href='modif_prof.php?id_prof=".$filas['id_prof']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prof.php?id_prof=".$filas['id_prof']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>