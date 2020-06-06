<?php
    include('database_connection.php');
if(!isset($_SESSION["type"]))
{
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<body>
    <div align="right">
        
    </div>
    <br>
    
    <?php
        if($_SESSION["type" == "user"])
            echo '<div> '
    ?>
</body>
</html>