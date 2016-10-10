<?php
$server = "localhost";
$username = "root";
$password = "081359774765";
$database = "oleole";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
