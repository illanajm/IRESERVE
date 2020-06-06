<?php
	session_start();
	if(isset($_SESSION["username"])){
		header("Location: success.php");
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor2/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor2/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor2/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor2/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor2/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor2/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/mains.css">
<!--===============================================================================================-->

 <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form method="POST" action="fetch.php" class="login100-form validate-form">
          
          <span class="login100-form-title p-b-48">
            <h1>Admin</h1>
          </span>

          

          <div class="wrap-input100 validate-input" data-validate="Enter Username">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="username" name="username">
            <span class="focus-input100" data-placeholder="Username"></span>
          </div>


          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <span class="btn-show-pass">
              <i class="zmdi zmdi-eye"></i>
            </span>
            <input class="input100" type="password" name="password">
            <span class="focus-input100" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button id="boton" name="login" type="submit" class="login100-form-btn">
                Login
              </button>
            </div>
          </div>

          <div class="text-left p-t-2">
            <span class="txt1">
              Back to Main Page? <a href="index.php">Click Me</a>
            </span>
          </div>
          
        </form>
      </div>
    </div>
  </div>

   
  
<!--===============================================================================================-->
  <script src="vendor2/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor2/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor2/bootstrap/js/popper.js"></script>
  <script src="vendor2/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor2/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor2/daterangepicker/moment.min.js"></script>
  <script src="vendor2/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor2/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>



        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>
</html>






