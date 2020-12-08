<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Data Kamar</title> 
</head>

<body> 
				<form action="?page=buatkamar" method="POST" enctype="multipart/form-data"> 
				<br />
				<ul id="isi">
					<h1><b>DATA KAMAR</b></h1><br>
					<input type="Submit" name="buat" value="Tambah Kamar">
				</ul>

				<?php 
					$tampil="SELECT * FROM kamar ORDER BY id_kmr";
					$query=mysqli_query($koneksi,$tampil)or die("Gagal".mysqli_error());
					$jumlah=mysqli_num_rows($query);
				?>
				
				<table border=1 align="center" rules="all" cellpadding="100" style="margin-top:20px;">

					<tr align="center" height="30">
						<td width="50"><b>No.</b></td>
						<td width="200"><b>Tipe Kamar</b></td>
						<td width="400"><b>Deskripsi</b></td>
						<td width="100"><b>Harga</b></td>
						<td colspan="2" width="150"><b>Action</b></td>
					</tr>

						<?php
							while($row=mysqli_fetch_array($query))
							{
								$a=$row['id_kmr'];
								$b=$row['tipe'];
								$c=$row['desk'];
								$d=$row['harga'];
						?>

					<tr align="center" height="20">
						<td><?php echo $a;?></td>
						<td><?php echo $b;?></td>
						<td><?php echo $c;?></td>
						<td><?php echo "Rp.".nominal($d);?></td>
						<td><a href="?page=hapuskamar&id=<?=$a;?>" onClick="return confirm('Anda Yakin Ingin Menghapus Item Ini?');">HAPUS</a></td>
						<td><a href="?page=editkamar&id=<?=$a;?>">EDIT</a></td>
					</tr>
						<?php } ?>
					<tr>
						<td colspan="6">--Jumlah Record : <?php echo $jumlah; ?></td>
					</tr>

				</table>
				</form> 
</body>
</html>

