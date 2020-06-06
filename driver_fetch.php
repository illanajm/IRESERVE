<?php
include('database_connect.php');
include('function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM driver INNER JOIN company ON driver.company_id=company.company_id ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE firstname LIKE "%'.$_POST["search"]["value"].'%" ';
	$query .= 'OR lastname LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY driver_id DESC ';
}
if($_POST["length"] != -1)
{
	$query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$data = array();
$filtered_rows = $statement->rowCount();
foreach($result as $row)
{
	$image = '';
	if($row["image"] != '')
	{
		$image = '<img src="upload/'.$row["image"].'" class="img-thumbnail" width="50" height="35" />';
	}
	else
	{
		$image = '';
	}
	$sub_array = array();
	$sub_array[] = $image;
	$sub_array[] = $row["firstname"];
	$sub_array[] = $row["middlename"];
	$sub_array[] = $row["lastname"];
	$sub_array[] = $row["age"];
	$sub_array[] = $row["address"];
	$sub_array[] = $row["status"];
	$sub_array[] = $row["driver_licence"];
	$sub_array[] = $row["company_name"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["driver_id"].'" class="fa fa-pen-alt btn btn-success btn-xs update"></button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["driver_id"].'" class="fa fa-trash-alt btn btn-warning btn-xs delete"></button>';
	$data[] = $sub_array;
}
$output = array(
	"draw"				=>	intval($_POST["draw"]),
	"recordsTotal"		=> 	$filtered_rows,
	"recordsFiltered"	=>	get_total_all_records(),
	"data"				=>	$data
);
echo json_encode($output);
?>