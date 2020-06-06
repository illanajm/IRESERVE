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
.limiter{
    color: white;
}
tr:hover{ 
    background-color: black;
}
</style>
<body>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form method="POST" action="passenger_insert.php" class="login100-form validate-form">
                    
            
                
                    <div class="data">

                    </div>
 <table id="table" class="table hover">
        <tr>
            <th>Bus Body Number</th>
            <th>Time</th>
        </tr>
<?php

	if(isset($_POST['submit'])){
		include 'database_connect.php';
		$origin = $_POST['origin'];
		$destination = $_POST['destination'];

		$sql = "SELECT bus_body_number,origin,destination,hour,minutes FROM bus_status WHERE origin = '$origin' AND destination = '$destination'";
		$result = $conn->prepare($sql);
		$result->execute();
		$result->setFetchMode(PDO::FETCH_ASSOC);
        
			if($result->fetchColumn() < 0){
                            echo "<tr><td>NO RESERVATION AS OF NOW</td></tr>";
                        }else{
                            while($row = $result->fetch()){
                                echo "<tr><td>".$row['bus_body_number']."</td><td>".$row['hour'].":".$row["minutes"]." min."."</td></tr>";
                            }
                           echo "</table>";
                       }
	}
?>


<br><br>
                    <div class="form-group">
                    <label  style="padding-right: 155px;color: white">Bus Body#</label>
                    <input style="background-color: lightgray;opacity: 1;"  type="text" name="bus_body_number" id="bus_body_number" class="form-control" placeholder="Bus Body#">
                    <label  style="padding-right: 155px;color: white">How many?</label>
                    <input style="background-color: lightgray;opacity: 1;"  type="text" name="passenger" id="passenger" class="form-control" placeholder="How many do you reserve?">
                    <label  style="padding-right: 120px;color: white">Mobile Number</label>
                    <input style="background-color: lightgray;opacity: 1;"  type="text" name="mobile" id="mobile"  class="form-control" placeholder="Mobile Number">
                    </div>
                    <br><br><br><br><br>
                        <span style="color: white" class="txt1">
                            Back to main page?
                            <a style="color: white"  class="txt2" href="index.html">Click Me</a>
                        </span>         
                    <br><br><br><br><br>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button  id="boton" name="submit" type="submit" class="login100-form-btn">
                                choose
                            </button>
                        </div>
                    </div>

                    </div>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>


  <script>
            var table = document.getElementById('table'),rIndex;
            
            for(var i = 0; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                        rIndex = this.rowsIndex;
                        document.getElementById("bus_body_number").value = this.cells[0].innerHTML;
                    };
                }
        
        
        </script>
</body>
</html>