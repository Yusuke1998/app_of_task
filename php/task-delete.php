<?php 
	extract($_POST);
	require_once('database.php');
	extract($_POST);

	$query = "DELETE FROM task WHERE id='$id'";
	$delete = $coneccion->query($query);
	if ($delete) {
		echo "Eliminado con exito!";
	}else{
		echo "No se pudo eliminar!";
	}

?>