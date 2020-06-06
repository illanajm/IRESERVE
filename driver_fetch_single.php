<?php
include("database_connect.php");
include("function.php");
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $conn->prepare(
		"SELECT * FROM driver
		WHERE driver_id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["firstname"] = $row["firstname"];
		$output["middlename"] = $row["middlename"];
		$output["lastname"] = $row["lastname"];
		$output["age"] = $row["age"];
		$output["address"] = $row["address"];
		$output["status"] = $row["status"];
		$output["driver_licence"] = $row["driver_licence"];
		$output["username"] = $row["username"];
		$output["password"] = $row["password"];
		$output["company_id"] = $row["company_id"];
		
	}
	echo json_encode($output);
}
?>