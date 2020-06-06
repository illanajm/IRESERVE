<!DOCTYPE html>
<html>
<title></title>
<head>
</head>
    
    <style>
        table{
        border-collapse:collapse;
        width:100%;
        color:#588c7e;
        font-family:monospace;
        font-size:25px;
        text-align:left;
        }
        tr:hover{
            background-color: darkorange;
        }
        th{
            text-align: center;
            background-color: aqua;
            color: white;
        }
        td{
            text-align: center;
        }
        
    </style>

<body>

    <h1>Passenger Reservation</h1>
    
     <table id="table" class="table hover">
        <tr>
            <th>Mobile Number</th>
            <th>Bus Body Number</th>
            <th>Passengers</th>
        </tr>

<?php

	if(isset($_POST['submit'])){
		include 'database_connect.php';
		$bus_body_number = $_POST['bus_body_number'];

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
	}
?>

<form method="POST">
        <input type="text" name="mobile" id="mobile" placeholder="mobile Number">
        <input type="text" name="bus_body_number" id="bus_body_number" placeholder="Bus Body Number">
         <input type="text" name="passenger" id="passenger" placeholder="passenger Number"><br><br>
        <input type="button" name="confirm" id="confirm" value="Confirm">
    </form><br>
    <form method="POST">
        <button type="button" name="reject">reject</button>
    </form>
         
         
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
