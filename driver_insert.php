<?php
include('database_connect.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		
		
		$password = $_POST["password"];
		$hashpass = password_hash($password,PASSWORD_DEFAULT);
		
		$statement = $conn->prepare("
			INSERT INTO driver (firstname, middlename, lastname, age, address, status, driver_licence, username, password, company_id) 
			VALUES (:firstname, :middlename, :lastname, :age, :address, :status, :driver_licence, :username, :hashpass, :company_id)");
		$result = $statement->execute(
			array(
				':firstname'	=>	$_POST["firstname"],
				':middlename'	=>	$_POST["middlename"],
				':lastname'		=>	$_POST["lastname"],
				':age'			=>	$_POST["age"],
				':address'		=>	$_POST["address"],
				':status'		=>	$_POST["status"],
				':driver_licence'	=>	$_POST["driver_licence"],
				':username'		=>	$_POST["username"],
				':hashpass'		=>	$hashpass,
				':company_id'	=>	$_POST["company_id"]
			)
		);

		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		
		$statement = $conn->prepare(
			"UPDATE driver 
			SET firstname = :firstname, middlename = :middlename, lastname = :lastname, age = :age, address = :address, status = :status, driver_licence = :driver_licence, username = :username, password = :password, company_id = :company_id  
			WHERE driver_id = :id
			"
		);
		$result = $statement->execute(
			array(
				
				':firstname'	=>	$_POST["firstname"],
				':middlename'	=>	$_POST["middlename"],
				':lastname'		=>	$_POST["lastname"],
				':age'			=>	$_POST["age"],
				':address'		=>	$_POST["address"],
				':status'		=>	$_POST["status"],
				':driver_licence'	=>	$_POST["driver_licence"],
				':username'		=>	$_POST["username"],
				':password'		=>	$_POST["password"],
				':company_id'	=>	$_POST["company_id"],
				':id'			=> 	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>