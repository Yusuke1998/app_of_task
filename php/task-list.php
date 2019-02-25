<?php 
	require_once('database.php');
	extract($_POST);

	$query = "SELECT id, name, description FROM task";
	$consulta = $coneccion->query($query);
	while ($row = mysqli_fetch_array($consulta)) {
		$array[]=	[
						'id'			=>	$row['id'],
						'name'			=>	$row['name'],
						'description'	=>	$row['description']
					];
	}

	$json = json_encode($array);
	echo $json;

?>