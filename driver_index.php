<html>
	<head>
		<title>Company</title>
        
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

      <a class="navbar-brand mr-1" href="success.php">iReserve </a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
          

        
        <div align="right">
					<button style="margin-left:980px" type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-m">+ Add Driver</button>
				</div>

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
          <a class="nav-link" href="index.php">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
        </li>
      </ul>
	<body>
		<div class="container box">
			
		
			<div class="table-responsive">
				
				
				<table id="user_data" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="30%">Company Image</th>
							<th width="20%">First Name</th>
							<th width="20%">Middle Name</th>
							<th width="20%">Last Name</th>
							<th width="5%">Age</th>
							<th width="20%">Address</th>
							<th width="10%">Status</th>
							<th width="10%">Liscence Number</th>
							<th width="10px">Company Name</th>

							<th width="10%">Update</th>
							<th width="10%">Delete</th>
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
					<h4 class="modal-title">Add User</h4>
				</div>
				<div class="modal-body">
					<label>Enter First Name</label>
					<input type="text" name="firstname" id="firstname" class="form-control" />
					<br />
					<label>Enter Middle Name</label>
					<input type="text" name="middlename" id="middlename" class="form-control" />
					<br />
					<label>Enter Last Name</label>
					<input type="text" name="lastname" id="lastname" class="form-control" />
					<br />
					<label>Enter Age</label>
					<input type="text" name="age" id="age" class="form-control" />
					<br />
					<label>Enter Address</label>
					<input type="text" name="address" id="address" class="form-control" />
					<br />
					<label>Enter Status</label>
					<select name="status" id="status">
						<option value="single">Single</option>
						<option value="married">Married</option>
						<option value="widow">Widow</option>
					</select>
					<br /><br />
					<label>Enter Driver's Liscence</label>
					<input type="text" name="driver_licence" id="driver_licence" class="form-control" />
					<br />
					<label>Enter Username</label>
					<input type="text" name="username" id="username" class="form-control" />
					<br />
					<label>Enter Password</label>
					<input type="password" name="password" id="password" class="form-control" />
					<br />
					<label>Enter Confirm Password</label>
					<input type="password" name="confirm" id="confirm" class="form-control" />
					<br />
					<label>Enter Company ID</label>
					<input type="text" name="company_id" id="company_id" class="form-control" />
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

<script src="driver_index_javascript.js" language="javascript" ></script>