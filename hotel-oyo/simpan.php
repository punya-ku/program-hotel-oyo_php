<?php
$a=$_GET['nik'];
$b=$_GET['nama'];
$c=$_GET['ttl'];
$d=$_GET['alamat'];
$e=$_GET['jk'];
$f=$_GET['tipe'];
$g=$_GET['desk'];
$h=$_GET['lama'];
$i=$_GET['in'];
$j=$_GET['out'];
$k=$_GET['harga'];
$l=$_GET['total']; 

$perintah="INSERT INTO transaksi values('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$simpan=mysqli_query($koneksi,$perintah);
	if($simpan)
		echo"<meta http-equiv='refresh' content='0 url=home.php?Data-Telah-Tersimpan'>";
	else
		echo"Gagal";
?>