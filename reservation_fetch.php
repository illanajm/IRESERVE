<?php
include('database_connect.php');
include('reservation_function.php');
$query = '';
$output = array();
$query .= "SELECT * FROM confirm ";
if(isset($_POST["search"]["value"]))
{
	$query .= 'WHERE bus_body_number LIKE "%'.$_POST["search"]["value"].'%" ';
}
if(isset($_POST["order"]))
{
	$query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
}
else
{
	$query .= 'ORDER BY confirm_id DESC ';
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

	$sub_array = array();
    $sub_array[] = $row["mobile"];
	$sub_array[] = $row["bus_body_number"];
    $sub_array[] = $row["passenger"];
	$sub_array[] = '<button type="button" name="update" id="'.$row["confirm_id"].'" class="fas fa-check btn btn-success btn-s update"></button>';
	$sub_array[] = '<button type="button" name="delete" id="'.$row["confirm_id"].'" class="fas fa-trash btn btn-warning btn-s delete"></button>';
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