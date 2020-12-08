<?php

$id = $_GET['id'];

    //jalankan query DELETE untuk menghapus data
	$koneksi=mysqli_connect("localhost","root","","oyo_townhouse")or die(mysql_error());
    $query = "DELETE FROM kamar WHERE id_kmr='$id' ";
    $hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='?page=kamar';</script>";
    }
?>


