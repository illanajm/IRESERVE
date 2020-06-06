<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		<input type="text" name="bus_body_number" id="bus_body_number" placeholder="Bus Body Number">
		<input type="text" name="bus_plate_number" id="bus_plate_number" placeholder="Bus Plate Number">
		<select name="path" id="path">
			<option value="2">Buenavista to Nasipit</option>
		</select>
		<input type="button" name="submit" id="submit" value="Add">
		
	</form>
<script src="js/jquery/jquery-3.3.1.min.js"></script>
<script src="bus_ajax.js"></script>
</body>
</html>