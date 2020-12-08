<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Ubah Kamar Hotel</title>
		<link rel="stylesheet" href="../style.css" />
</head>

<body>
			<ul id="isi">
			<form action="?page=updatekamar" method="POST" enctype="multipart/form-data">
				<br /> 
				<?php
					error_reporting(0);
					$tampil="SELECT * FROM kamar WHERE id_kmr='".$_GET['id']."'";
					$query=mysqli_query($koneksi,$tampil)or die("Gagal".mysqli_error());
					$row=mysqli_fetch_array($query);
					$a=$row['id_kmr'];
					$b=$row['tipe'];
					$c=$row['desk'];
					$d=$row['harga'];
				?>
				<table border=0 align="center">

					<tr>
						<th colspan="3" align="center"><h1>Edit Kamar</h1><br /> </th>
					</tr>
					<tr><input name="id" value="<?php echo $a; ?>" hidden /></tr>
					<tr>
						<td>Tipe</td>
						<td>:</td>
						<td><input type="text" name="tipe" required="required" size="50" value="<?php echo $b; ?>"/></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td><input type="text" name="deskripsi" required="required" size="50" value="<?php echo $c; ?>"/></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><input type="text" name="harga" required="required" size="50" value="<?php echo $d; ?>"/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="submit" name="Kirim" value="KIRIM"></td>
					</tr>
				</table>
			</form>
</body>
</html>