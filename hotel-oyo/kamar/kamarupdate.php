<?php
$koneksi=mysqli_connect("localhost","root","","oyo_townhouse")or die(mysql_error());
$id=$_POST['id'];
$a=$_POST['tipe'];
$b=$_POST['deskripsi'];
$c=$_POST['harga'];
$ubah="UPDATE kamar SET tipe='$a',desk='$b',harga='$c' where id_kmr='$id'";
$simpan=mysqli_query($koneksi,$ubah);
	if($simpan)
		echo "<script>alert('Data berhasil diubah.');window.location='?page=kamar';</script>";
	else
		echo"Gagal";
?>
