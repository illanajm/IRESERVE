<?php
session_start();

	if(isset($_POST["login"])){
		include 'database_connect.php';

		$username = $_POST['username'];
		$password = $_POST['password'];


		if($username == "" || $password == ""){
			header("Location: index.php?login=empty");
			
		}else{
			$sql = "SELECT * FROM system_admin WHERE username = '$username'";
			$result = $conn->prepare($sql);
			$result->execute();
			$result->setFetchMode(PDO::FETCH_ASSOC);
			if($result->fetchColumn < 1){
                header("Location: index.php");//if result is not in the database
            }
			
				if($row = $result->fetch()){
					//dehasing the password

					$hashpassCheck =  password_verify($password, $row['password']);
					if($hashpassCheck == false){
                        
						header("Location: index.php?login=error_password");
						exit();
					}elseif($hashpassCheck == true){
						//login user

						$_SESSION['user_id'] = $row['admin_id'];
						$_SESSION['user_first'] = $row['firstname'];
						$_SESSION['user_middle'] = $row['middlename'];
						$_SESSION['user_last'] = $row['lastname'];
						$_SESSION['user_username'] = $row['username'];
						header("Location: success.php");
					}
				}
			}
		


}else{
	header("Location: index_login.php?login=error");
	exit();
}





	