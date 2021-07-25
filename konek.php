<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "hotel";

	$konek = mysqli_connect($host, $user, $pass, $db);

	if(!$konek) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>

	