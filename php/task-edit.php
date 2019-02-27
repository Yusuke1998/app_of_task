<?php
	require_once('database.php');
	extract($_POST);

	$query = "UPDATE task SET name = '$name', description = '$description' WHERE id = '$id_editar'";

	$update = $coneccion->query($query);
	
	if ($update) {
		echo "Actualizado con exito!";	
	}
 ?>