<?php
$page = $_GET['page'];

if ($_GET['page'] == 'produksaya') {
	include"page/produk/produk.php";
}
elseif ($_GET['page'] == 'tambahproduk') {
	include"page/produk/tambah_produk.php";
}
else{
	include"page/dashboard/dashboard.php";
}
?>