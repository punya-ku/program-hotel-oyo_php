 <?php 
	session_start();
	include "../fungsi/koneksi.php";
	include "../fungsi/waktu.php";
	include "../fungsi/nominal.php";

	if(@$_SESSION['Manager'] || @$_SESSION['Admin']){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>OYO TOWN HOUSE</title>
		<link rel="stylesheet" href="../style.css" />
</head>

<body>
	<div id="wrapper"> 
		<div id="header"> 
			<img src="../img/IMG_20200102_121222.jpg" alt="OYO"/>
			
			<ul id="menu">
				<li><a href="home.php">Home</a></li>
				<li><a href="?page=profile">Profile</a></li>
				<li><a href="?page=company">Company</a></li>
				<li><a href="logout.php">Log-Out</a></li>
			</ul>
		</div>
		<div id="sidebar">

			<?php
			if(@$_SESSION['Manager']){
				$userlogin = $_SESSION['Manager'];
			} elseif (@$_SESSION['Admin']) {
				$userlogin = $_SESSION['Admin'];
			}

			$tampil="SELECT * FROM admin WHERE id_adm='$userlogin'";
			$query=mysqli_query($koneksi,$tampil)or die(mysqli_error("Gagal"));
			$row=mysqli_fetch_array($query);
			$jabatan=$row['jabatan'];
			$nama=$row['nama'];
			$foto=$row['foto'];
			?>

			<img src="../img/<?php echo $foto; ?>"/><br />
			<label><b><?php echo $nama; ?></b></label><br />
			<label><b><?php echo $jabatan; ?></b></label><br />

			<ul id="bar">
				<li><a href="?page=pesanan">Data Pesanan</a></li>
				<li><a href="?page=kamar">Data Kamar</a></li>
				<li><a href="?page=admin">Admin</a></li>
			</ul>

		</div>
		<div id="halaman" style="height:550px;">
			<?php 
			$page = @$_GET['page'];
			if($page == "profile"){
				include "profile.php";
			} elseif($page == "company"){
				include "company.php";
			} elseif($page == "pesanan"){
				include "../pesanan/read.php";
			} elseif($page == "pesankamar"){
				include "../pesanan/create.php";
			} elseif($page == "simpanpesanan"){
				include "../pesanan/save.php";
			} elseif($page == "kamar"){
				include "../kamar/kamarread.php";
			} elseif($page == "buatkamar"){
				include "../kamar/kamarcreate.php";
			} elseif($page == "simpankamar"){
				include "../kamar/kamarsave.php";
			} elseif($page == "editkamar"){
				include "../kamar/kamaredit.php";
			} elseif($page == "updatekamar"){
				include "../kamar/kamarupdate.php";
			} elseif($page == "hapuskamar"){
				include "../kamar/kamardelete.php";
			} elseif($page == "admin"){
				include "profileread.php";
			} elseif($page == ""){
				?>
				<ul id="isi">
				<img src="../img/oyo1.jpg" /><img src="../img/oyo2.jpg" /><img src="../img/oyo3.jpg"/>
				<form action="?page=pesankamar" method="POST">
					<h1><b>OYO TOWN HOUSE 1 Hotel Salemba</b></h1>
					<p>Jl. Voorvo No. 26, RT.004/RW.06, Kec. Samarinda Kota, Samarinda, Daerah Khusus Ibukota Kalimantan Timur</p>
					<br />
					<h2>Harga Termurah !!!</h2>
					<input type="submit" name="Kirim" value="Pesan Sekarang">
				</form>
				</ul>
				<?php
			} else{
				echo "404!	Halaman Tidak di Temukan";
			}
			?>

			
		</div>
		<div id="footer">
				<p>OYO TOWN HOUSE copyright&copy;2020 by BABY</p>
		</div>
	</div>
</body>
</html>

<?php
}else{
	header("location: login.php");
}
?>