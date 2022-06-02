<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: LOGIN.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = ($_POST['password']);
	$check = "staff";
	while ($result->num_rows < 1) {
	$sql = "SELECT * FROM $check WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: HOME_STAFF.php");
	} else {
		$check ="admin";
		$sql = "SELECT * FROM $check WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);
			if ($result->num_rows > 0) {
				$row = mysqli_fetch_assoc($result);
				$_SESSION['username'] = $row['username'];
				header("Location: HOME_ADMIN.php");
			} else {
				echo "<script>alert('Maaf Email atau Password salah.')</script>";
				break;
			}
	}
	}
	
}
?>

<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Bootstrap CSS -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="style.css" rel="stylesheet">
<title>Layout</title>
<style> .satu{background: #ccc;} .dua{background: #aaa;} .tiga{background: #888;} .empat{background:#999} .lima{background:#666} 
body{
	background-image: url("perpusunja.jpg");
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
}

</style>
</head>
<body style="margin: 70px">
<form method="POST">
<div class="container-md blue fw-bold text-white">
	<div class="mb-3 mt-3 px-4 py-2">
		<div class="col-md-11 text-start text-white h1 py-2"> Login SIP</div>		
	</div>
	<div class="mb-3 mt-3 px-4">
		<label for="username" class="form-label">Username</label>
    	<input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" value="<?php echo $username; ?>" required>
					
		<!--<div class="col-md-11 text-start text-white py-2">Username<div>-->
	</div>
	<div class="mb-3 mt-3 px-4">
    	<label for="pwd" class="form-label">Password</label>
    	<input type="password" class="form-control" id="pwd" placeholder="Masukkan password" name="password" value="<?php echo $_POST['password']; ?>" required>
  	</div>
	<button type="submit" class="btn darkblue text-white mx-4 mb-3" name="submit">Login</button>
</div>
</form>
<!--<script src="bootstrap/js/bootstrap.bundle.min.js"></script>-->
</body>
</html>