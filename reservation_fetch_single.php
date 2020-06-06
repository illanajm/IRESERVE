<?php
include('database_connect.php');
include('reservation_function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM confirm 
		WHERE confirm_id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["mobile"] = $row["mobile"];
		$output["bus_body_number"] = $row["bus_body_number"];
	}
	echo json_encode($output);
}
?>