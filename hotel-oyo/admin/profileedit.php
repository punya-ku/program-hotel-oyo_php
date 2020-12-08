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
		<title>Edit Profile</title>
		<link rel="stylesheet" href="../style.css" />
</head>

<body>
	<div id="wrapper"> 
		<div id="header"> 
			<img src="../img/IMG_20200102_121222.jpg" alt="OYO"/>
			
			<ul id="menu">
				<li><a href="home.php">Home</a></li>
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
			$query=mysqli_query($koneksi,$tampil)or die("Gagal".mysqli_error());
			$row=mysqli_fetch_array($query);
			$jabatan=$row['jabatan'];
			$nama=$row['nama'];
			$foto=$row['foto'];
			?>

			<img src="../img/<?php echo $foto; ?>"/><br />
			<label><b><?php echo $nama; ?></b></label><br />
			<label><b><?php echo $jabatan; ?></b></label><br />

		</div>
		<div id="halaman">
			<ul id="isi">
				
			<form action="profileupdate.php" method="POST" enctype="multipart/form-data">
				<br /> 
				<?php
					error_reporting(0);
					$tampil="SELECT * FROM admin WHERE id_adm='".$_GET['id']."'";
					$query=mysqli_query($koneksi,$tampil)or die("Gagal".mysqli_error());
					$row=mysqli_fetch_array($query);
					$a=$row['id_adm'];
					$b=$row['jabatan'];
					$c=$row['nik'];
					$d=$row['nama'];
					$e=$row['ttl'];
					$f=$row['alamat'];
					$g=$row['jk'];
					$h=$row['agama'];
					$i=$row['email'];
					$j=$row['hp'];
					$k=$row['uname'];
					$l=$row['pass'];
					$m=$row['foto']
				?>
				<table border=0 align="center">

					<tr>
						<th colspan="3" align="center"><h1>Edit Profile Admin</h1><br /> 	</th>
					</tr>
					<tr>
						<th><input name="id" value="<?php echo $a; ?>" hidden /></th>
					</tr>
					<tr>
						<td>Jabatan</td>
						<td>:</td>
						<td><input type="text" name="jabatan" required="required" size="50" value="<?php echo $b; ?>"/></td>
					</tr>
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td><input type="text" name="nik" required="required" size="50" value="<?php echo $c; ?>"/></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" required="required" size="50" value="<?php echo $d; ?>"/></td>
					</tr>
					<tr>
						<td>Tempat/Tanggal Lahir</td>
						<td>:</td>
						<td><input type="text" name="ttl" required="required" size="50" value="<?php echo $e; ?>"/></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input type="text" name="alamat" required="required" size="50" value="<?php echo $f; ?>"/></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td><input type="radio" name="jk" required="required" value="Laki-laki">Laki-laki
							<input type="radio" name="jk" required="required" value="Perempuan">Perempuan
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>:</td>
						<td><select name="agama" value="Agama" required="required">
								<option>- Agama -</option>
								<option>Islam</option>
								<option>Kristen</option>
								<option>Katolik</option>
								<option>Hindu</option>
								<option>Buddha</option>
								<option>Konghucu</option></select></td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td><input type="text" name="email" required="required" size="50" value="<?php echo $i; ?>"/></td>
					</tr>
					<tr>
						<td>No. HP</td>
						<td>:</td>
						<td><input type="text" name="hp" required="required" size="50" value="<?php echo $j; ?>"/></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username" required="required" size="50" value="<?php echo $k; ?>"/></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="text" name="password" required="required" size="50" value="<?php echo $l; ?>"/></td>
					</tr>
					<tr>
						<td>Foto</td>
						<td>:</td>
						<td><input type="file" name="foto" required="required" size="35"/></td><br />
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="submit" name="Kirim" value="Simpan"></td>
					</tr>
				</table>
			</form>
			</ul>
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