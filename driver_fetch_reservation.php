
<!DOCTYPE html>
<html>
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

    
    <table id="table" class="table hover">
        <tr>
            <th>Mobile Number</th>
              <th>Bus Body #</th>
            <th>Passengers</th>
        </tr>

    
       
                <?php

                    if(isset($_POST['submit'])){
                        include 'database_connect.php';
                        $bus = $_POST['bus_body_number'];

                        $sql = "SELECT * FROM reservation WHERE bus_body_number = '$bus' ";
                        $result = $conn->prepare($sql);
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
        
    <form method="POST" action="list_confirm.php">
        <input type="text" name="mobile" id="mobile" placeholder="mobile Number">
        <input type="text" name="bus_body_num" id="bus_body_num" placeholder="Bus Body Number">
         <input type="text" name="passenger" id="passenger" placeholder="passenger Number"><br><br>
        <button type="submit" name="submit">Confirm</button>
    </form><br>
    <form method="POST" action="success.php">
        <button type="submit" name="submit">Delete</button>
    </form>
        
        <script>
            var table = document.getElementById('table'),rIndex;
            
            for(var i = 0; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                        rIndex = this.rowsIndex;
                        document.getElementById("mobile").value = this.cells[0].innerHTML;
                         document.getElementById("bus_body_num").value = this.cells[1].innerHTML;
                        document.getElementById("passenger").value = this.cells[2].innerHTML;
                    };
                }
        
        
        </script>

    </body>
</html>

   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    