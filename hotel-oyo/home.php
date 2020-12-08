<?php 
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	include "fungsi/koneksi.php";
	include "fungsi/waktu.php";
	include "fungsi/nominal.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>OYO TOWN HOUSE</title>
		<link rel="stylesheet" href="style.css" />
		<link rel="stylesheet" href="imageslider.css" />
</head>

<body>
	<div id="wrapper"> 
		<div id="header"> 
			<img src="img/IMG_20200102_121222.jpg" alt="OYO"/>
			
			<ul id="menu">
				<li><a href="home.php">Home</a></li>
				<li><a href="?page=company">Company</a></li>
				<li><a href="?page=room">Room</a></li>
			</ul>
		</div>
		<div id="hall" style="height:550px;">
			<?php 
			$page = @$_GET['page'];
			if($page == "company"){
				include "company.php";
			} elseif($page == "room"){
				include "room.php";
			} elseif($page == "pesankamar"){
				include "pesan.php";
			} elseif($page == "konfirmasipesanan"){
				include "konfirmasi.php";
			} elseif($page == "simpanpesanan"){
				include "simpan.php";
			} elseif($page == ""){
				?>
				<ul id="hall-isi">
				<img src="img/oyo1.jpg" /><img src="img/oyo2.jpg" /><img src="img/oyo3.jpg"/>
				<form action="?page=pesankamar" method="POST">
					<h1><b>OYO TOWN HOUSE 1 Hotel Salemba</b></h1>
					<p>Jl. Voorvo No. 26, RT.004/RW.06, Kec. Samarinda Kota, Samarinda, Daerah Khusus Ibukota Kalimantan Timur</p>
					<br>
					<h2>Harga Termurah !!!</h2>
					<input type="submit" name="Kirim" value="Pesan Sekarang">
				</ul>
				<?php
			} else{
				echo"404!	Halaman Tidak di Temukan";
			}
			?>

		</div>
		<div id="footer">
				<p>OYO TOWN HOUSE copyright&copy;2020</p>
		</div>
	</div>
</body>
</html> 