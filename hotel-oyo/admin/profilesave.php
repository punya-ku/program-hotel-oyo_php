<?php

$a=$_POST['jabatan'];
$b=$_POST['nik'];
$c=$_POST['nama'];
$d=$_POST['ttl'];
$e=$_POST['alamat'];
$f=$_POST['jk'];
$g=$_POST['agama'];
$h=$_POST['email'];
$i=$_POST['hp'];
$j=$_POST['username'];
$k=$_POST['password'];
$l=$_FILES['foto']['name'];

$koneksi=mysqli_connect("localhost","root","","oyo_townhouse")or die(mysql_error());
$perintah="INSERT INTO admin VALUES('','$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
copy($_FILES['foto']['tmp_name'],"../img/".$l);
$simpan=mysqli_query($koneksi,$perintah);
	if($simpan)
		echo "<script>alert('Data berhasil di Simpan');window.location='home.php';</script>";
	else
		echo"Gagal";
?>