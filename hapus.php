<?php

include("config.php");

if( isset($_GET['id_pemesanan']) ){
	
	// ambil id dari query string
	$id_pemesanan = $_GET['id_pemesanan'];
	
	// buat query hapus
	$sql = "DELETE FROM dilukisin WHERE id_pemesanan=$id_pemesanan";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: list-pesanan.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
