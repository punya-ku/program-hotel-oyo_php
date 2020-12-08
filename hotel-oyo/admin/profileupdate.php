<?php

$id=$_POST['id'];
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
$foto=$_FILES['foto']['name'];

//cek dulu jika merubah gambar produk jalankan coding ini
  if($foto != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $foto); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['foto']['tmp_name'];   
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
    	move_uploaded_file($file_tmp, '../img/'.$foto); //memindah file gambar ke folder gambar
                      
           	// jalankan query UPDATE berdasarkan ID yang produknya kita edit
            $koneksi=mysqli_connect("localhost","root","","oyo_townhouse")or die(mysql_error());
            $ubah="UPDATE admin SET jabatan='$a',nik='$b',nama='$c',ttl='$d',alamat='$e',jk='$f',agama='$g',email='$h',hp='$i',uname='$j',pass='$k',foto='$foto' where id_adm='$id'";
            $result = mysqli_query($koneksi, $ubah);
            // periska query apakah ada error
                if(!$result){
                    die ("Query gagal dijalankan: ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                } else {
                //tampil alert dan akan redirect ke halaman index.php
                //silahkan ganti index.php sesuai halaman yang akan dituju
                   	echo "<script>alert('Data berhasil diubah.');window.location='home.php';</script>";
                    }
    } else {     
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    	echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='profileread.php';</script>";
    }
  }
?>
