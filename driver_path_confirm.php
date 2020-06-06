<?php


    if(isset($_POST['submit'])){
        include 'database_connect.php';
        $mobile = $_POST['mobile'];
        $bus_body_number = $_POST['bus_body_number'];
        $passenger = $_POST['passenger'];
        
        $sql = "INSERT INTO confirm (mobile,bus_body_number,passenger) VALUES('$mobile','$bus_body_number','$passenger');";
        if($conn->exec($sql)){

                $statement = $conn->prepare(
                    "DELETE FROM reservation WHERE mobile_number = :mobile"
                );
                $result = $statement->execute(
                    array(
                        ':mobile'	=>	$_POST["mobile"]
                    )
                );
            }

        }
        