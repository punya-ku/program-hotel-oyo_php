<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Profile Admin</title>
		<link rel="stylesheet" href="../style.css" />
</head>

<body>
				<ul id="isi">
					<br><h1><b>DATA PESANAN</b></h1><br>
				</ul>

				<?php
					$koneksi=mysqli_connect("localhost","root","","oyo_townhouse")or die(mysql_error());
					$tampil="SELECT * FROM transaksi ORDER BY id_psn";
					$query=mysqli_query($koneksi,$tampil)or die("Gagal".mysqli_error());
					$jumlah=mysqli_num_rows($query);
				?>
				
				<table border=1 align="center" rules="all" cellpadding="100" style="margin-top:20px;">

					<tr align="center">
						<td><b>Check-In</b></td>
						<td><b>Check-Out</b></td>
						<td><b>NIK</b></td>	
						<td><b>Nama</b></td>
						<td><b>Tempat/Tanggal Lahir</b></td>
						<td><b>Alamat</b></td>
						<td><b>Jenis Kelamin</b></td>
						<td><b>Tipe Kamar</b></td>
						<td><b>Deskripsi</b></td>
						<td><b>Lama sewa</b></td>
						<td><b>Harga</b></td>
						<td><b>Total</b></td>
					</tr>

						<?php
							while($row=mysqli_fetch_array($query))
							{
								$b=$row['nik'];
								$c=$row['nama'];
								$d=$row['ttl'];
								$e=$row['alamat'];
								$f=$row['jk'];
								$g=$row['tipe'];
								$h=$row['desk'];
								$i=$row['lama'];
								$j=$row['cin'];
								$k=$row['cout'];
								$l=$row['harga'];
								$m=$row['total'];
						?>
					<tr align="center">
						<?php
						$in=format_tgl1($j);
						$out=format_tgl1($k);
						?>
						<td width="85"><?php echo $in;?></td>
						<td width="85"><?php echo $out;?></td>
						<td><?php echo $b;?></td>
						<td><?php echo $c;?></td>
						<td><?php echo $d;?></td>
						<td><?php echo $e;?></td>
						<td><?php echo $f;?></td>
						<td><?php echo $g;?></td>
						<td><?php echo $h;?></td>
						<td><?php echo $i." hari";?></td>
						<td><?php echo "Rp.".nominal($l);?></td>
						<td><?php echo "Rp.".nominal($m);?></td>
					</tr>
						<?php } ?>
					<tr>
						<td colspan="12">Jumlah Record : <?php echo $jumlah; ?></td>
					</tr>
				</table>
</body>
</html>

