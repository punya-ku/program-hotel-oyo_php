<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Profile</title>
</head>

<body> 
			<form action="profilecreate.php" method="POST" enctype="multipart/form-data">
			<ul id="isi">
				<br>
				<br>
				<h1><b>DATA ADMIN</b></h1><br>
				<br>
			
			<div id="hall-">
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
				$nik=$row['nik'];
				$nama=$row['nama'];
				$ttl=$row['ttl'];
				$alamat=$row['alamat'];
				$jk=$row['jk'];
				$agama=$row['agama'];
				$email=$row['email'];
				$hp=$row['hp'];
				$uname=$row['uname'];
				$pass=$row['pass'];
				$foto=$row['foto'];
				?>

				<table border=0 align="center">
					<tr>	
						<td rowspan="11" ><img src="../img/<?php echo $foto; ?>"/><br /></td>
						<td width="30">&nbsp;</td>
						<td width="200">Jabatan</td>
						<td width="20"> : </td>
						<td><?php echo $jabatan; ?></td>
					</tr>
					<tr>
						<td width="30">&nbsp;</td>
						<td width="200">NIK</td>
						<td width="20"> : </td>	
						<td><?php echo $nik; ?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Nama</td>
						<td width="20"> : </td>
						<td><?php echo $nama; ?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Tempat, Tanggal Lahir</td>
						<td width="20"> : </td>
						<td><?php echo $ttl; ?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Alamat</td>
						<td width="20"> : </td>
						<td><?php echo $alamat; ?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Jenis Kelamin</td>
						<td width="20"> : </td>
						<td><?php echo $jk ;?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Agama</td>
						<td width="20"> : </td>
						<td><?php echo $agama ;?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Email</td>
						<td width="20"> : </td>
						<td><?php echo $email ;?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">No. Handphone</td>
						<td width="20"> : </td>
						<td><?php echo $hp ;?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Username</td>
						<td width="20"> : </td>
						<td><?php echo $uname ;?></td>
					</tr>
					<tr>	
						<td width="30">&nbsp;</td>
						<td width="200">Password</td>
						<td width="20"> : </td>
						<td><?php echo $pass ;?></td>
					</tr>
				</table> 
			</div>
			</form> 
</body>
</html>

