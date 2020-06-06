<!DOCTYPE html>
<html>
<head>
    <title></title>

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
    <style type="text/css">


#button{
    margin-bottom: 100px;
    }
.data{
    position: absolute;
    top:calc(150px);
    left: calc(50% - 80px);
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
margin-right: 5px;
}
.container-login100-form-btn{
    color: white;
}
th{
    color: black;
}
td{
    color:white;
}
a{
    color: white;
}
</style>
<body>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="passenger_insert.php" class="login100-form validate-form">
                    
            
                
                    <div class="data">
                    <h3 style="color: white;padding-right: 10px;margin-right:70px">Passenger Reservation</h3>

                    </div>

    <br><br>
     <table id="table" class="table hover">
        <tr>
            <th>Mobile Number</th>
            <th>Bus Body#</th>
            <th>Passenger</th>
        </tr>
<?php

	if(isset($_POST['submit'])){
		include 'database_connect.php';
		$origin = $_POST['origin'];
		$destination = $_POST['destination'];
        $hour = $_POST['hour'];
        $min = $_POST['min'];
		$driver_id = $_POST['driver_id'];
        $bus_body_number = $_POST['bus_body_number'];
	
		$sql = "INSERT INTO bus_status (origin,destination,hour,minutes,driver_id,bus_body_number) VALUES('$origin','$destination','$hour','$min','$driver_id','$bus_body_number');";
        if($origin == "" || $destination == "" || $driver_id == "" || $bus_body_number == ""){
            header("Location: driver_route.php?insert=error");
        }else if($conn->exec($sql)){
             $s = "SELECT * FROM reservation WHERE bus_body_number = '$bus_body_number' ";
                        $result = $conn->prepare($s);
                        $result->execute();
                        $result->setFetchMode(PDO::FETCH_ASSOC);
                       if($result->fetchColumn() < 0){
                            echo "<tr><td>NO RESERVATION AS OF NOW</td></tr>";
                        }else{
                            while($row = $result->fetch()){
                                echo "<tr><td>".$row['mobile_number']."</td><td>".$row['bus_body_number']."</td><td>".$row["passenger_number"]."</td></tr>";
                            }
                           echo "</table>";
                       }

		}else{
            header("Location: driver_route.php");
        }
	}
?>
         
<a href="update_route.php">Update Route? Click Me</a>
 
<form method="POST">
                    <div class="form-group">
                    
                    <input style="background-color:white;"  type="text" name="mobile" id="mobile" class="form-control" placeholder="Mobile Number"><br>
                   
                    <input style="background-color:white;"  type="text" name="bus_body_number" id="bus_body_number" class="form-control" placeholder="Bus Body#"><br>
                   
                    <input style="background-color:white;"  type="text" name="passenger" id="passenger"  class="form-control" placeholder="Passenger Number">
                    </div>
                    <br><br><br><br><br><br><br><br>
                        <span style="color: white" class="txt1">
                            Back to main page?
                            <a style="color: white"  class="txt2" href="index.html">Click Me</a>
                        </span>         
                   
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="button" name="confirm" id="confirm">Confirm</button>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            
                        <button type="button" name="reject" id="reject">reject</button>
                        </div>
                    </div>

                    </form>

                    </div>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>         
         
<script src="jquery-3.3.1.min.js"></script>        
<script src="driver_path_confirm_ajax.js"></script>
        
        <script>
            var table = document.getElementById('table'),rIndex;
            
            for(var i = 0; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                        rIndex = this.rowsIndex;
                        document.getElementById("mobile").value = this.cells[0].innerHTML;
                         document.getElementById("bus_body_number").value = this.cells[1].innerHTML;
                        document.getElementById("passenger").value = this.cells[2].innerHTML;
                    };
                }
        
        
        </script>
    
    
    
    
    
    </body>
    </html>
