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
					<a class="nav-link" href="HOME_ADMIN.php">Home</a>
				</li>
				<li class="nav-item">
        			<a class="nav-link active" href="PEMINJAMAN.php">Peminjaman</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="PENGEMBALIAN.php">Pengembalian</a>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link" href="LAPORAN.php">Laporan</a>
      			</li>      			
    		</ul>
            <button type="button" class="btn" href="LOGOUT.php">Log out</button></div>			
			<img src="outline_account_circle_white_36.png" style="width:40px; height:40px; float:right;"> 
		</div>
	</nav>	

    <form method="POST">
<div class="container-md fw-bold text-dark">
	<div class="mb-3 mt-3 px-4 py-2">
        <label for="IDTrans" class="form-label">ID Transaksi</label>
        <input type="text" class="form-control" id="IDTrans" name="IDTrans" required>
	</div>
    <div class="mb-3 mt-3 px-4 py-2">
        <label for="NIM" class="form-label">NIM</label>
        <input type="text" class="form-control" id="NIM" name="NIM" required>
	</div>
    <div class="mb-3 mt-3 px-4 py-2">
        <label for="ISBN" class="form-label">ISBN</label>
        <input type="text" class="form-control" id="ISBN" name="ISBN" required>
	</div>
    <div class="mb-3 mt-3 px-4 py-2">
        <label for="TPinjam" class="form-label">Tanggal Peminjaman</label>
        <input type="datetime-local" class="form-control" id="TPinjam" name="TPinjam" required>
	</div>
    <div class="mb-3 mt-3 px-4 py-2">
        <label for="DL" class="form-label">DEADLINE</label>
        <input type="datetime-local" class="form-control" id="DL" name="DL" required>
	</div>
    <div class="d-flex justify-content-center"><button type="submit" class="btn btn-secondary text-white mx-4 mb-3" name="submit">Submit</button></div>
</div>
</form>
</body>
</html>