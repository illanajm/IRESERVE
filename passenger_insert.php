<?php
	if(isset($_POST['submit'])){
		include 'database_connect.php';
		$bus_body_number = $_POST['bus_body_number'];
		$passenger_number = $_POST['passenger'];
		$mobile_number = $_POST['mobile'];

		if($bus_body_number == "" || $passenger_number == "" || $mobile_number ==""){
			header("Location: fetch_available_buses.php?available:empty");
		}else{

			$sql = "INSERT INTO reservation (bus_body_number,passenger_number,mobile_number)VALUES('$bus_body_number','$passenger_number','$mobile_number')";
			if($conn->exec($sql)){
				header("Location: passenger_reserve.php");
			}

		}


	}