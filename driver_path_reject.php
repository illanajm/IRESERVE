<?php

	if(isset($_POST['reject'])){
		include 'database_connect.php';
		$mobile = $_POST['mobile'];
        $bus_body_number = $_POST['bus_body_number'];
        $passenger = $_POST['passenger'];

		$sql = "DELETE FROM reservation WHERE bus_body_number = '$bus_body_number'";

		$statement = $conn->prepare($sql);
		$result = $statement->execute();

	}