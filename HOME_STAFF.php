<?php
include 'config.php';

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="HOMEGUEST.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> </link>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
  <nav  class ="navbar navbar-expand-sm darkblue navbar-dark">
  
		<div class="container-fluid darkblue">
			<ul class="navbar-nav">				
				<li class="nav-item">
					<a class="nav-link active" href="HOME_STAFF.php">Home</a>
				</li>
				<li class="nav-item">
        			<a class="nav-link" href="PEMINJAMAN.php">Peminjaman</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="PENGEMBALIAN.php">Pengembalian</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="LAPORAN.php">Laporan</a>
      			</li>      			
    		</ul>			
			<P><?php if (isset($_SESSION['username'])) {echo 'username';};?></P>
			<img src="outline_account_circle_white_36.png" style="width:40px; height:40px; float:right;"> 
		</div>
	</nav>	
	<div class="container-md ">
		<div style="margin-top:250px" class="row">
			<div class="col text-center">Selamat Datang Di Sistem Informasi Perpustakaan</div>			
		</div>
		<div class="d-flex p-1 justify-content-center text-white">
  			<div class="p-2"><a type="button" class="btn btn-secondary" href="LOGOUT.php">Log out</a></div>
		</div>
	</div>
</body>
</html>