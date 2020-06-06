<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Driver_Route</title>
</head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">


  <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
  
<body>
	<nav class="navbar navbar-inverse" style="background-color: dodgerblue">
  <div class="container-fluid">
    
    
     
    <ul class="nav navbar-nav navbar-right" style="color: white">
      <li><?php
      if(isset($_SESSION['user_id'])){
        $user = $_SESSION['user_username'];
        echo $user;
      }  
      ?>
        <form method="POST" action="driver_logout.php">
        <input style="background-color:red; color:white;width:80px;border-radius:10px;margin-left: 30px" type="submit" name="submit" value="logout">
       </form>
        
      </li>
    </ul>
  </div>
</nav>

  <div class="container">
    <div class="row">

        <form method="POST">
          <label>Origin:</label>
          <input type="text" name="origin" id="origin">
          <label>Destination:</label>
          <input type="text" name="destination" id="destination">
          <label>Bus #:</label>
          <input type="text" name="busnumber" id="busnumber">
          <label>Confirm Bus #:</label>
          <input type="text" name="confirm_busnumber" id="confirm_busnumber">
          <button type="submit" id="submit">Submit</button>
          
        </form>
      
    </div>
  </div>



</body>
</html>