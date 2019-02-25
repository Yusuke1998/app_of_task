<?php 
	require_once('database.php');
	extract($_POST);
	
	$query = "SELECT * FROM task WHERE id='$id'";
	$data = $coneccion->query($query);

	$array = mysqli_fetch_assoc($data);
	
	$json_string = json_encode($array);
	echo $json_string;
?>