<?php
session_start();


include 'database_connect.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$query = $conn->prepare("SELECT username, password FROM account WHERE username = :username AND password = :password");
$query->execute();

$datas = [];

while($row = $query->fetchAll()){
    
    $datas = $row;
}

if(empty($datas)){
  header("Location: index.php?login=0");
}
else{
  $_SESSION['username'] = $user;
  header("Location: index.php?login=1");
}


