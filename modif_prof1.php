<?php
	

	ModificarProfesor($_POST['id_prof'],$_POST['nombre'], $_POST['apellidos'], $_POST['correo'], $_POST['usuario'], $_POST['contraa']);

	function ModificarProfesor($id_prof,$Nomb, $Ape, $correoo, $Usuario, $Pass)
	{
		include 'conexion.php';

		/*$sentencia="UPDATE profesor SET Nomb= '".$Nomb."', Ape='".$Ape."', correo='".$correo."', Usuario= '".$Usuario."', Pass= '".$Pass."'  WHERE profesor.id_prof='".$id_prof."' ";*/

		$sentencia="UPDATE profesor SET Nomb='$Nomb', Ape='$Ape', correo='$correoo', Usuario='$Usuario', Pass='$Pass'  WHERE id_prof='$id_prof'";

		//$res = $mysqli->query("UPDATE usuarios SET nom='$nom',ape='$ape' WHERE ident='$ident'");

		//$mysqli->query($sentencia);
		$res = $mysqli->query($sentencia);
		//mysqli_query($mysqli,$sentencia); //or die (mysqli_error());
	}
?>

<script type="text/javascript">
	alert("profesor Modificado Exitosamente");
	window.location.href='index.php';
</script>