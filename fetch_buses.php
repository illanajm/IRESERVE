<?php

	if(isset($_POST['submit'])){
		include 'database_connect.php';

		$sql = "SELECT * FROM bus INNER JOIN path ON path.path_id = bus.path_id;";
		$result = $conn->prepare($sql);
		$result->execute();
		$result->setFetchMode(PDO::FETCH_ASSOC);
		if($row = $result->fetchAll()){
			echo "<table><tr><td>".$row["bus_body_number"]." ".$row["bus_plate_number"]." ".$row["path_id"]."</td></tr></table>";
		}
	}