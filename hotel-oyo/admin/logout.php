<?php 
	session_start();
	$_SESSION["admin_id_adm"];
	$_SESSION["admin_uname"];
	
	unset($_SESSION["admin_id_adm"]);
	unset($_SESSION["admin_uname"]);
	
	session_unset();
	session_destroy();
	
	header("location:login.php?logout-Berhasil")
?>