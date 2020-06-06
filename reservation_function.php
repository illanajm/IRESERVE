<?php


function get_total_all_records()
{
	include('database_connect.php');
	$statement = $conn->prepare("SELECT * FROM confirm");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>