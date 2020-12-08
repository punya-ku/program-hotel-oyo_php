
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Buat Profile</title>
</head> 
<body> 
			<form action="?page=konfirmasipesanan" method="POST" enctype="multipart/form-data">
				<table border=0 align="center">
					<tr>
						<td width="200">&nbsp;</td>
						<td width="30">&nbsp;</td>
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
						<td align="left">NIK</td>
						<td> : </td>
						<td><input type="text" name="nik" required="required" size="100"/></td>
					</tr>
					<tr>
						<td align="left">Nama</td>
						<td> : </td>
						<td><input type="text" name="nama" required="required" size="100"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Tempat/Tanggal Lahir</td>
						<td> : </td>
						<td><input type="text" name="ttl" required="required" size="100"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Alamat</td>
						<td> : </td>
						<td><input type="text" name="alamat" required="required" size="100"/></td>
					</tr>
					<tr>
						<td width="200" align="left">Jenis Kelamin</td>
						<td> : </td>
						<td><input type="radio" name="jk" required="required" value="Laki-laki">Laki-laki
							<input type="radio" name="jk" required="required" value="Perempuan">Perempuan
						</td>
					</tr>
					<tr>
						<td width="200" align="left">Tipe Kamar</td>
						<td> : </td>
						<td><select name="tipe" value="Tipe Kamar">
                                 <option>- Tipe Kamar -</option>
                                 <?php
								// Skrip menampilkan data tipekamar ke dalam List/Menu 
									$tampil="SELECT * FROM kamar ORDER BY id_kmr";
									$query=mysqli_query($koneksi,$tampil)or die(mysqli_error("Gagal"));
									while ($row=mysqli_fetch_array($query))
									{
										echo "<option>  $row[tipe]  </option>";
									}
								?></select>
					</tr>
					<tr>
						<td width="200" align="left">Check-In</td>
						<td> : </td>
						<td><input type="date" name="in" required="required" /></td>
					</tr>
					<tr>
						<td width="200" align="left">Check-Out</td>
						<td> : </td>
						<td><input type="date" name="out" required="required" /></td>
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
						<td colspan="3" align="center"><input type="submit" name="Kirim" value="KIRIM"></td>
					</tr>
				</table>
			</form>
</body>
</html>

