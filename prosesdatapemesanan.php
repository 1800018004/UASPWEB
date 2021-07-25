<?php

	include'konek.php';

	$nik = $_POST['nik'];//menampung nilai nip
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$tanggal = $_POST['tanggal'];

	$query = mysqli_query($konek,"INSERT INTO pemesanan (nik,nama,nohp,tanggal) VALUES ('$nik', '$nama', '$nohp', '$tanggal')");

	//cek apakah udah diinput atau belum
	echo $query;
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header('location:datapemesanan.php');

?>