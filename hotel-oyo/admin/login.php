<?php 
	session_start();
	include "../fungsi/koneksi.php";

	if(@$_SESSION['Manager'] || @$_SESSION['Admin']){
		header("location: home.php");
	} else {
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Form Login Admin</title>
		<link rel="stylesheet" href="../style.css" />
</head>

<body background="../img/oyo.jpg" >
	<div class="login">
		<form action="" method="post" style="text-align:center"> 
			<br>
			<table align="center">
				<tr>
					<th></th>
				</tr>
					<tr>
						<th><h1>Form Login Admin</h1></th>
					</tr>
				<tr> 
					<td>
						<br><input type="text" name="username" placeholder="Masukkan Username" size="70"/>
					</td>
				</tr>
				<tr> 
					<td>
						<input type="password" name="password" placeholder="Masukkan Password" size="70"/>
					</td>
				</tr>
				<tr> 
					<td>
						<br><input type="submit" name="login" value="Kirim"/>
					</td>
				</tr>
			</table>
		</form>
	</div>
	<?php
	
	/* Proses Login */
	$user=@$_POST['username'];
	$pass=@$_POST['password'];
	$login=@$_POST['login'];
		
		if($login){
			if($user == "" || $pass == ""){
				?> <script type="text/javascript">alert("Username atau Password tidak boleh kosong");</script> <?php
			} else {
				$perintah="SELECT * FROM admin WHERE uname='$user' AND pass='$pass'";
				$simpan=mysqli_query($koneksi,$perintah);
				$tampil=mysqli_fetch_array($simpan);
				if(mysqli_num_rows($simpan)>=1){
					if($tampil['jabatan'] == "Manager"){
						@$_SESSION['Manager']=$tampil['id_adm'];
						header("location:home.php?login-Berhasil");
					}elseif($tampil['jabatan'] == "Admin"){
						@$_SESSION['Admin']=$tampil['id_adm'];
						header("location:home.php?login-Berhasil");
					}
				}else{
					header("location:login.php?login-gagal");
				}
			}
		}
	?>

</body>
</html>
<?php
}
?>
