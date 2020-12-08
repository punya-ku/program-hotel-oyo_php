<?php
$a=$_POST['nik'];
$b=$_POST['nama'];
$c=$_POST['ttl'];
$d=$_POST['alamat'];
$e=$_POST['jk'];
$f=$_POST['tipe'];
$g=$_POST['in'];
$h=$_POST['out']; 

$tampil="SELECT * FROM kamar WHERE tipe='$f'";
$query=mysqli_query($koneksi,$tampil)or die("Gagal".mysqli_error());
$row=mysqli_fetch_array($query);
$deskripsi=$row['desk'];
$harga=$row['harga'];

$cin=new DateTime($g);
$cout=new DateTime($h);
$interval=$cin->diff($cout);
$selisih=$interval->format('%R%a');
$ceknilai=strlen($selisih)-1;
$nilai_bulat=substr($selisih,1,$ceknilai);
$lamasewa=$nilai_bulat;
$total=0;
$total=$lamasewa*$harga;


$perintah="INSERT INTO transaksi values('','$a','$b','$c','$d','$e','$f','$deskripsi','$lamasewa','$g','$h','$harga','$total')";
$simpan=mysqli_query($koneksi,$perintah);
	if($simpan)
		echo"<meta http-equiv='refresh' content='0 url=?Data-Telah-Tersimpan'>";
	else
		echo"Gagal";
?>