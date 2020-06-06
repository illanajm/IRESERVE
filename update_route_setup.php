
<?php

	if(isset($_POST['update'])){
		include 'database_connect.php';
		$origin = $_POST["origin"];
		$destination = $_POST["destination"];
		$hour = $_POST["hour"];
		$minutes = $_POST["minutes"];
		$bus_body_number = $_POST["bus_body_number"];

		$statement = $conn->prepare(
			"UPDATE bus_status 
			SET origin = '$origin', destination = '$destination', hour = '$hour', minutes = '$minutes'
			WHERE bus_body_number = '$bus_body_number'
			");
		$result = $statement->execute();


	}