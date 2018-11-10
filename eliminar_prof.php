<?php
	

	EliminarProfesor($_GET['id_prof']);

	function EliminarProfesor($id_prof)
	{
		include 'conexion.php';

		$res = $mysqli->query("UPDATE profesor SET Estatus=0 WHERE id_prof='$id_prof'");

	}
?>

<script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='index.php';
</script>