<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Buat Kamar Hotel</title>
		<link rel="stylesheet" href="../style.css" />
</head>

			<ul id="isi">
				<form action="?page=simpankamar" method="POST" enctype="multipart/form-data">
				<table border=0 align="center">

					<tr>
						<th colspan="3" align="center"><h1>Tambah Kamar</h1><br /> </th>
					</tr>
					<tr>
						<td>Tipe</td>
						<td>:</td>
						<td><input type="text" name="tipe" required="required" size="50"/></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td><input type="text" name="deskripsi" required="required" size="50"/></td>
					</tr>
					<tr>
						<td>Harga</td>
						<td>:</td>
						<td><input type="text" name="harga" required="required" size="50"/></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td><input type="submit" name="Kirim" value="KIRIM">
		    			</td>
					</tr>
				</table>
				</form>
			</ul>
</body>
</html>

