<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Profile Admin</title>
</head>

<body> 
				<form action="../admin/profilecreate.php" method="POST" enctype="multipart/form-data">
				<br />
				<ul id="isi">
					<h1><b>DATA ADMIN</b></h1><br>
					<input type="Submit" name="buat" value="Buat Akun">
				</ul>

				<?php
					$tampil="SELECT * FROM admin ORDER BY id_adm";
					$query=mysqli_query($koneksi,$tampil)or die("Gagal".mysqli_error());
					$jumlah=mysqli_num_rows($query);
				?>
				
				<table border=1 align="center" rules="all" cellpadding="100" style="margin-top:20px;">

					<tr align="center">
						<td><b>No.</b></td>
						<td><b>Jabatan</b></td>
						<td><b>NIK</b></td>
						<td><b>Nama</b></td>
						<td><b>Tempat/Tanggal Lahir</b></td>
						<td><b>Alamat</b></td>
						<td><b>Jenis Kelamin</b></td>
						<td><b>Agama</b></td>
						<td><b>Email</b></td>
						<td><b>No. Handphone</b></td>
						<td><b>Username</b></td>
						<td><b>Password</b></td>
						<td colspan="2"><b>Action</b></td>
					</tr>

						<?php
							while($row=mysqli_fetch_array($query))
							{
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
						?>

					<tr align="center">
						<td><?php echo $a;?></td>
						<td><?php echo $b;?></td>
						<td><?php echo $c;?></td>
						<td><?php echo $d;?></td>
						<td><?php echo $e;?></td>
						<td><?php echo $f;?></td>
						<td><?php echo $g;?></td>
						<td><?php echo $h;?></td>
						<td><?php echo $i;?></td>
						<td><?php echo $j;?></td>
						<td><?php echo $k;?></td>
						<td><?php echo $l;?></td>
						<td><a href="../admin/profiledelete.php?id=<?=$a;?>" onClick="return confirm('Anda Yakin Ingin Menghapus Item Ini?');">HAPUS</a></td>
						<td><a href="../admin/profileedit.php?id=<?=$a;?>">EDIT</a></td>
					</tr>
						<?php } ?>
					<tr>
						<td colspan="14">Jumlah Record : <?php echo $jumlah; ?></td>
					</tr>

				</table>
				</form> 
</body>
</html>

