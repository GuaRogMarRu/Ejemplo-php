
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Detalles Profesor</title>
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
  		<span> <h1>Detalles Profesor</h1> </span>
  		<br>
	        <div id="contenido">
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <thead>
        <th>Nombre</th>
      </thead>
      
      
      <?php
     
      echo "En progreso";
      DetallesProfesor($_POST['id_prof']);

      function DetallesProfesor($id_prof){
         include "conexion.php";
        // $sentencia='SELECT * FROM u_profesor WHERE Estatus =1';
          $sentencia='SELECT * FROM u_profesor WHERE Estatus =1';

          $result = $mysqli->query($sentencia);

         // $mysqli = mysqli_query($sentencia);
          //$resultado=mysql_query($sentencia);
          while($filas=mysqli_fetch_assoc($result))
          {
            echo "<tr>";
              echo "<td>"; echo $filas['Nomb']; echo "</td>";
              echo "<td>  <a href='detalles_prof.php?no=".$filas['id_prof']."'> <button type='button' class='btn btn-success'>Detalles</button> </a> </td>";
            echo "</tr>";
      }
      }
       

      ?>
    </table>
  </div>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>