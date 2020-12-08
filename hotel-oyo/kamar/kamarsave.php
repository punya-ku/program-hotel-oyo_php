<?php
$koneksi=mysqli_connect("localhost","root","","oyo_townhouse")or die(mysqli_error());
$a=$_POST['tipe'];
$b=$_POST['deskripsi'];
$c=$_POST['harga'];
$perintah="INSERT INTO kamar values('','$a','$b','$c')";
$simpan=mysqli_query($koneksi,$perintah);
	if($simpan)
		echo"<meta http-equiv='refresh' content='0 ?page=kamar'>";
	else
		echo"Gagal";
?>