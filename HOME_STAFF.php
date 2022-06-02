<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="HOMEGUEST.css">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
  <div class="topnav">
   <span onclick="openNav()">&#9776;</span>
   <a class="active" href="HOME_GUEST.php">Beranda</a>
   <a href="TENTANGKAMI.php">Tentang Kami</a>
   <a href="PRODUK_TEMPE.php">Produk Tempe</a>
   <a href="BANTUAN.php">Bantuan</a>
   <a class="acc" href="PROFILE.php">
    <img src="outline_account_circle_white_36.png" style="width:30px;height:30px;">
   </a>
   <a class="login" href="LOGOUT.php">LOG OUT</a>
  </div>
	<div id="mySidenav" class="sidenav">
  	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="PESANAN.php">Pesanan</a>  
	</div>
	
	<script>
	function openNav() {
	  document.getElementById("mySidenav").style.width = "250px";
	  document.getElementById("main").style.marginLeft = "250px";

	}

	function closeNav() {
	  document.getElementById("mySidenav").style.width = "0";
	  document.getElementById("main").style.marginLeft = "0";
	}
	</script>
	<div id="main">
	 
  	  <pre>
	 	<h1 class="topword">SIDUTA</h1>


	
	

	SIDUTA merupakan sebuah website tempat terjadinya transaksi jual beli produk tempe

		berdasarkan data tahun 2013, jumlah Usaha Mikro Kelas Menengah (UMKM) di Kota Jambi ada sebanyak 10.024 unit dengan 
	jumlah tenaga kerja sebanyak 28.898 orang. UMKM ini termasuk kedalam 32 unit usaha yang mencakup industri pengolahan 
	makanan, industri kerajinan kulit, industri kerajinan batik, dan industri kerajinan lainnya.

 
 		Salah satu Usaha Mikro Kecil Menengah (UMKM) dalam industri pengolahan makanan adalah usaha industri tempe. 
 	Tempe sudah lama diakui sebagai makanan dengan nilai kandungan gizi yang tinggi. Sejumlah penelitian yang 
 	diterbitkan pada tahun 1940-an sampai 1960-an, diperoleh hasil bahwa tempe mengandung elemen yang berguna bagi tubuh,
 	yaitu asam lemak, vitamin, mineral, dan antioksidan. Tempe merupakan sumber vitamin B yang sangat potensial. Maka dari 
 	itu usaha ini dapat terus dibutuhkan oleh banyak orang dan menjadi terus berkembang.

		Salah satunya adalah Usaha Mikro Kecil menengah (UMKM) tempe yang ada di Kota Jambi adalah usaha yang dijalankan
	oleh Pak Ahmadi. Beliau menjalankan usaha ini lebih tepatnya di daerah Tanjung Pinang. Usaha ini merupakan usaha 
	keluarga,yang diajarkan orang tua kepada anak-anaknya. Salah satunya ada Pak Ahmadi yang memilih untuk melanjutkan 
	usaha keluarga ini. 
		</pre>
	</div>
</body>
</html>