<?php
include_once "includes/config.php";
$database = new Config();
$db = $database->getConnection();

include_once 'includes/pembelian.inc.php';
$pro = new Pembelian($db);
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');
$pro->id = $id;
	
if($pro->delete() && $pro->deleteItem()){
	echo "<script>alert('Berhasil Hapus Data');location.href='pembelian.php';</script>";
} else{
	echo "<script>alert('Gagal Hapus Data');location.href='pembelian.php';</script>";
		
}
?>
