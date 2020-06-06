<?php

	if(isset($_POST['path'])){
		include 'database_connect.php';
		$origin = $_POST['origin'];
		$destination = $_POST['destination'];

		$sql = "INSERT INTO path(origin,destination) VALUES('$origin','$destination');";
		if($conn->exec($sql));
	}