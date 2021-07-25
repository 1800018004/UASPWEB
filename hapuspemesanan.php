<?php
include "konek.php";
// menyimpan data id kedalam variabel
$nik  = $_GET['nik'];
// query SQL untuk insert data
$query="DELETE from pemesanan where nik='$nik'";
echo $query;
mysqli_query($konek, $query);
// mengalihkan ke halaman index.php
header('location:datapemesanan.php');
?>S