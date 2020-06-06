<?php
include('database_connect.php');
include('add_company_function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$image = '';
		if($_FILES["user_image"]["name"] != '')
		{
			$image = upload_image();
		}
		$statement = $conn->prepare("
			INSERT INTO company (company_name, company_address, image) 
			VALUES (:company_name, :company_address, :image)
		");
		$result = $statement->execute(
			array(
				':company_name'	=>	$_POST["company_name"],
				':company_address'	=>	$_POST["company_address"],
				':image'		=>	$image
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
        $image = '';
        if($_FILES["user_image"]["name"] != '')
        {
            $image = upload_image();
        }
        else
        {
            $image = $_POST["hidden_user_image"];
        }
		
		$statement = $conn->prepare(
			"UPDATE company 
			SET company_name = :company_name, company_address = :company_address, image = :image
			WHERE company_id = :id
			");
		$result = $statement->execute(
			array(
				
				':company_name'	    =>	$_POST["company_name"],
                ':company_address'	=>  $_POST["company_address"],
                ':image'            =>  $image,
				':id'		        => 	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
    }




?>