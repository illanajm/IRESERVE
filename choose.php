
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
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

 <!-- CSS -->
        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="css/register.css">

</head>
<style type="text/css">
  .p{
  position: absolute;
  top:calc(20px);
  left: calc(50% - 85px);
  top: calc(60% - 250px);
  color: white;
}


.indent{
  position: absolute;
  top:calc(20px);
  left: calc(50% - 100px);
  top: calc(70% - 30px);
}
.pad{
  position: absolute;
  top:calc(70px);
  left: calc(50% - 80px);
  top: calc(70% - 180px);
}
}
</style>
<body >
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
      <div class="p">
          <h1 style="color: white">Choose</h1>
          <p style="color: white;">Your Ride, Your Choice</p>
          </div>
          <div class="pad">
           <i style="color: black" class="fa fa-users fa-5x"></i>
          <form method="POST" action="passenger.php">
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button id="passenger" name="submit" type="submit" class="login100-form-btn">
                Passenger
              </button>
            </div>
          </div>
    </form>
    <i style="color: black" class="fa fa-wheelchair fa-5x"></i>
    <form method="POST" action="driver_select_company.php">
          <div class="container-login100-form-btn">
            <div class="wrap-login100-form-btn">
              <div class="login100-form-bgbtn"></div>
              <button id="driver" name="submit" type="submit" class="login100-form-btn">
                Driver
              </button>
            </div>
          </div>
</form>
</div>
          
          
          </div>
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
        <script src="js/choose.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>
</html>