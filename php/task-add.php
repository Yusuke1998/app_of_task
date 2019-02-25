<?php 
	require_once('database.php');
	extract($_POST);

	if (!empty($name) && !empty($description)) {
		$query = "INSERT INTO task (name,description) VALUES ('$name','$description')";
		$data = $coneccion->query($query);
		if ($data) {
			echo "Tarea: {$name} agregada con exito";
		}else{
			echo "Error al crear tarea";
		}
	}
?>