<?php
	

	NuevoProfesor($_POST['anombre'], $_POST['aapellido'], $_POST['acorreo'], $_POST['ausuario'], $_POST['acontra'],$_POST['id_libro']);

	function NuevoProfesor($Nombre, $Apellido, $Correo, $Usuario, $Pass,$id_libro)
	{
		include 'conexion.php';
		/*echo $sentencia="INSERT INTO profesor (anobre, nombre, descripcion) VALUES ('".$id_prod."', '".$nom."', '".$descrip."')";
		mysql_query($sentencia) or die (mysql_error());*/
		//$consulta = "INSERT INTO profesor (Nomb,Ape,correo,Usuario,Pass) Nomb='$Nombre',Ape='$Apellido',corroe='$Correo',Usuario='$Pass',Pass=$Pass'";

		$consulta = "INSERT INTO profesor SET Nomb='$Nombre',Ape='$Apellido',correo='$Correo',Usuario='$Usuario',Pass='$Pass',Estatus=1";
		$res = $mysqli->query($consulta);

		$ultimo = mysqli_insert_id($mysqli);

		$consulta1 = "INSERT INTO u_profesor SET id_prof='$ultimo', id_libro='$id_libro'";
		$ress = $mysqli->query($consulta1);
	}

	/*InsercionTablaUProfesor($_POST['m_libro']);

	function InsercionTablaUProfesor($id_libro)
	{
		include 'conexion.php';

		$ultimo = mysql_insert_id();
		$consulta1 = "INSERT INTO u_profesor SET id_prof='$ultimo', id_libro='$id_libro'";
		$ress = $mysqli->query($consulta1);
	}*/
?>

<script type="text/javascript">
	alert("Profesor Agregado Exitosamente");
	window.location.href='index.php';
</script>