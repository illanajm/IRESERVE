<?php
include 'database_connect.php';
session_start();
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    
  </head>

  <body id="page-top">
  <img class="reserva" src="images/ilogo3.png">
  <img class="ireserve" src="images/iR.png">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Bus Reservation</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar -->
     

       
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add_company.php">
            <i class="fas fa-building"></i>
            <span>Registered Company</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservation.php">
            <i class="fas fa-users"></i>
            <span>Reservation</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="driver_index.php">
            <i class="fas fa-wheelchair"></i>
            <span>Registered Drivers</span></a>
        </li>
          <li class="nav-item">
          <a class="nav-link"  href="index.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>         
          </li>
      </ul>

      <p style="color: white;text-align: center;margin-top:350px;font-size: 15px;margin-left: 460px">Your Ride, Your Choice</p>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span style="color: white;padding-right: 30px">Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

   
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
  
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>



  </body>

</html>
