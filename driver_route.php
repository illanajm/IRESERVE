<?php
	session_start();
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
	left: calc(50% - 80px);
	top: calc(60% - 215px);
	color: white;
}

#button{
	margin-bottom: 100px;
	}
.data{
	position: absolute;
	top:calc(150px);
	left: calc(50% - 55px);
	top: calc(60% - 280px);
	}
.form-control{
	padding-bottom: 18px;
	padding-top: 18px;
	margin-bottom: 20px;
}
.form-group{
position: absolute;
left: calc(50% - 130px);
margin-right: 2px;

}
.limiter{
	color: black;
}
a{
	color: white;
	text-decoration: none;
}


</style>
<body >

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form method="POST" action="driver_path.php" class="login100-form validate-form">
					
			
					<p class="p">Your Ride, Your Choice</p>
					<div class="data">
					<b><h1 style="color: white">Route</h1></b>

					</div>
					
				
									
								
				     <div class="form-group">
				     <br><br>
					<input style="background-color: white;"  type="text" name="origin" id="origin" class="form-control" placeholder="Origin"><br>
					<input style="background-color: white"  type="text" name="destination" id="destination" class="form-control" placeholder="Destination">
					</div><br>

					<br><br><br><br><br><br>
					<div class="form-group">
					
					<input style="background-color: white ;"  type="text" class="form-control" name="driver_id" id="driver_id" placeholder="Driver ID#">
					</div> <br><br>
                    <div class="form-group">
					
					<input style="background-color: white;"  type="text" class="form-control" name="bus_body_number" id="bus_body_number" placeholder="Bus Body#">
					</div>
					<br><br><br>
                    <div>
                    <label style="color:white">Time Arrival</label><br>
                     <label style="color:white">Hour:</label>
                    <select name="hour" id="hour">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                         <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                     <label style="color:white">Minutes:</label>
                     <select name="min" id="min">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                         <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">12</option>
                        <option value="14">12</option>
                        <option value="15">12</option>
                        <option value="16">12</option>

                    </select>
					</div>
					
						<span style="color: white" class="txt1">
							Back to main page?
							<a style="color: white"  class="txt2" href="index">Click Me</a>
						</span>			
		
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" id="boton" name="submit" class="login100-form-btn">
								login
							</button>
						</div>
					</div>
					

					</div>
					
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
	<script src="js/update_route_ajax.js"></script>



        <!-- Javascript -->
        
       
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>
</html>