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
      <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />
		<script src="js/jquery/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>

		
		<style>
			body
			{
				margin:0;
				padding:0;
				background-color:#f1f1f1;
			}
			.box
			{
				width:1270px;
				padding:50px;
				background-color:#fff;
				border:1px solid #ccc;
				border-radius:5px;
                background-color: white;
                position: center;
				
			}
            td{
                text-align: center;
            }
		</style>
	</head>

    <title>Admin</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    


  <body id="page-top">
      
      
  
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">iReserve</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
         
        
      
      <!-- Navbar -->
    

       
        

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="success.php">
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
	<body>
		<div class="container box">
			
				<div class="table-responsive table-hover">
				
				

				
			<table id="user_data" class="table table-bordered">
					<thead>
						<tr>
							<th width="300px">Mobile #</th>
							<th width="250px">Bus Body #</th>
                            <th width="200px">Passenger#</th>

							<th width="10%">Confirm</th>
							<th width="10%">Reject</th>
						</tr>
					</thead>
				</table>
				
			</div>
		</div>
	


<div id="userModal" class="modal fade">
	<div class="modal-dialog">
		<form method="post" id="user_form" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"></h4>
				</div>
				<div class="modal-body">
					<label>Mobile</label>
					<input type="text" name="mobile" id="mobile" class="form-control" />
					<br />
					<label>Bus Body Number</label>
					<input type="text" name="bus_body_number" id="bus_body_number" class="form-control" />
					<br />
				</div>
				<div class="modal-footer">
					<input type="hidden" name="user_id" id="user_id" />
					<input type="hidden" name="operation" id="operation" />
					<input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script src="reservations_index.js" language="javascript" ></script>