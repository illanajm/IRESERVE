<?php
session_start();

	if(isset($_POST["login"])){
		include 'database_connect.php';
		$company = $_POST['company'];
		$username = $_POST['username'];
		$password = $_POST['password'];


		if($username == "" || $password == ""){
			header("Location: driver_select_company.php?login=empty");
			
		}else{
			$sql = "SELECT * FROM driver INNER JOIN company ON driver.company_id=company.company_id WHERE driver.username = '$username' AND company.company_id = '$company'";
			$result = $conn->prepare($sql);
			$result->execute();
			$result->setFetchMode(PDO::FETCH_ASSOC);
			if($result->fetchColumn < 1 ){
                header("Location: driver_select_company.php?login=er");//if result is not in the database
            }
			
				if($row = $result->fetch()){
					//dehasing the password

					$hashpassCheck =  password_verify($password, $row['password']);
					if($hashpassCheck == false){
						header("Location: driver_select_company.php?login=error_password");
						exit();
					}elseif($hashpassCheck == true){
						//login user

						$_SESSION['user_id'] = $row['driver_id'];
						$_SESSION['user_first'] = $row['firstname'];
						$_SESSION['user_middle'] = $row['middlename'];
						$_SESSION['user_last'] = $row['lastname'];
						$_SESSION['user_age'] = $row['age'];
						$_SESSION['user_address'] = $row['address'];
						$_SESSION['user_status'] = $row['status'];
						$_SESSION['user_driver_licence'] = $row['driver_licence'];
						$_SESSION['user_username'] = $row['username'];
						$_SESSION['user_company_id'] = $row['company_id'];
						header("Location: driver_route.php");
					}
				}
			}
            
		


}else{
	header("Location: driver_select_company.php?login=");
	exit();
}





	/*	$sql = "SELECT * FROM system_admin WHERE username = '$username'";
		$result = $conn->prepare($sql);
		$result->execute();
		$result->setFetchMode(PDO::FETCH_ASSOC);
			if($row = $result->fetch()){
					$hashpassCheck =  password_verify($password, $row['password']);
					
					if($hashpassCheck == true){
						$_SESSION['user_id'] = $row['admin_id'];
						$_SESSION['user_first'] = $row['firstname'];
						$_SESSION['user_middle'] = $row['middlename'];
						$_SESSION['user_last'] = $row['lastname'];
						$_SESSION['user_username'] = $row['username'];
						header("Location: intro.php");


				}
			}
				
		
	}
	*/