<?php

	if(isset($_POST['bus'])){
		include 'database_connect.php';
		$bus_body_number = $_POST['bus_body_number'];
		$bus_plate_number = $_POST['bus_plate_number'];
		$path = $_POST['path'];

		$sql = "INSERT INTO bus (bus_body_number,bus_plate_number,path_id) VALUES('$bus_body_number','$bus_plate_number','$path');";
		if($conn->exec($sql));
	}