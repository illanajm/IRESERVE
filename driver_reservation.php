<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Select Available Buses</h2>

    

<form method="POST" action="driver_fetch_reservation.php">
<br><br>
<h4>View Reservation</h4>
<input type="text" name="bus_body_number" id="bus_body_number" placeholder="BUS BODY #">
<button type="submit" name="submit" id="boton">Input Bus Body Number</button>
</form>



</body>
</html>