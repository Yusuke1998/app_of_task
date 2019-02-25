<?php 
	require_once('database.php');
	extract($_POST);
	
	$query = "SELECT * FROM task WHERE name LIKE '$search%'";
	$data = $coneccion->query($query);

	while ($row = mysqli_fetch_array($data)) {
		$array[] = ['id'=>$row['id'],'name'=>$row['name'],'description'=>$row['description']];
	}
	
	$json_string = json_encode($array);
	echo $json_string;
?>