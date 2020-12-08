<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Buat Profile</title>
</head>

<body>
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
					$query=mysqli_query($koneksi,$tampil)or die(mysqli_error("Gagal"));
					$row=mysqli_fetch_array($query);
					$deskripsi=$row['desk'];
					$harga=$row['harga'];
					
					$checkin=format_tgl1($g);
					$checkout=format_tgl1($h);
					$cin=new DateTime($g);
					$cout=new DateTime($h);
					$interval=$cin->diff($cout);
					$selisih=$interval->format('%R%a');
					$ceknilai=strlen($selisih)-1;
					$nilai_bulat=substr($selisih,1,$ceknilai);
					$lamasewa=$nilai_bulat;
					$total=0;
					$total=$lamasewa*$harga;
					
			?>
				<form action="?page=simpanpesanan&nik=<?=$a;?>&nama=<?=$b;?>&ttl=<?=$c;?>&alamat=<?=$d;?>&jk=<?=$e;?>&tipe=<?=$f;?>&desk=<?=$deskripsi;?>&lama=<?=$lamasewa;?>&in=<?=$g;?>&out=<?=$h;?>&harga=<?=$harga;?>&total=<?=$total;?>" method="POST" enctype="multipart/form-data">
				<table border=0 align="center">
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<th colspan="3" align="center"><h1>FORM PEMESANAN</h1><br /> </th>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td width="200">NIK</td>
						<td width="20"> : </td>
						<td><?php echo $a;?></td>
					</tr>
					<tr>
						<td width="200">Nama</td>
						<td width="20"> : </td>
						<td><?php echo $b;?></td>
					</tr>
					<tr>
						<td width="200">Tempat/Tanggal Lahir</td>
						<td width="20"> : </td>
						<td><?php echo $c;?></td>
					</tr>
					<tr>
						<td width="200">Alamat</td>
						<td width="20"> : </td>
						<td><?php echo $d;?></td>
					</tr>
					<tr>
						<td width="200">Jenis Kelamin</td>
						<td width="20"> : </td>
						<td><?php echo $e;?></td>
					</tr>
					<tr>
						<td width="200">Tipe Kamar</td>
						<td width="20"> : </td>
						<td><?php echo $f;?></td>
					</tr>
					<tr>
						<td width="200">Deskripsi</td>
						<td width="20"> : </td>
						<td><?php echo $deskripsi;?></td>
					</tr>
					<tr>
						<td width="200">Check-In</td>
						<td width="20"> : </td>
						<td><?php echo $checkin;?></td>
					</tr>
					<tr>
						<td width="200">Check-Out</td>
						<td width="20"> : </td>
						<td><?php echo $checkout;?></td>
					</tr>
					<tr>
						<td width="200">Lama Menginap</td>
						<td width="20"> : </td>
						<td><?php echo $lamasewa." hari";?></td>
					</tr>
					<tr>
						<td width="200">Harga Sewa</td>
						<td width="20"> : </td>
						<td><?php echo "Rp.".nominal($harga); ?></td>
					</tr>
					<tr>
						<td width="200">Total Harga</td>
						<td width="20"> : </td>
						<td><?php echo "Rp.".nominal($total);?></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input type="submit" name="lanjut" value="Pesan"></td>
					</tr>
				</table>
				</form>
</body>
</html> 