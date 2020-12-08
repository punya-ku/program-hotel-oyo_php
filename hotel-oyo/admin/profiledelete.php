<?php

$id = $_GET['id'];

    //jalankan query DELETE untuk menghapus data
	$koneksi=mysqli_connect("localhost","root","","oyo_townhouse")or die(mysql_error());
    $query = "DELETE FROM admin WHERE id_adm='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='home.php';</script>";
    }
?>


