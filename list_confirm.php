<?php

if(isset($_POST['submit'])){
    include 'database_connect.php';
    $mobile = $_POST['mobile'];
    $bus_body_num = $_POST['bus_body_num'];
    $passenger = $_POST['passenger'];
    
    if($mobile == ""){
        header("Location: driver_fetch_reservation.php");
    }else{
    $sql = "INSERT INTO confirm (mobile,bus_body_number,passenger) VALUES('$mobile','$bus_body_num','$passenger');";
    if($conn->exec($sql)){
      $statement = $conn->prepare(
		"DELETE FROM reservation WHERE mobile_number = '$mobile'"
	);
	$result = $statement->execute(
		array(
			'$mobile'	=>	$_POST["mobile"]
		)
	);
	
	if(!empty($result))
	{
		header("Location: driver_fetch_reservation.php");
	}
    }
}
}