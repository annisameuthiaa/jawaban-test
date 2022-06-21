<?php

include("configg.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id_pemesanan = $_POST['id_pemesanan'];
	$nama = $_POST['nama'];
	$notelp = $_POST['notelp'];
	$media_lukis = $_POST['media_lukis'];
	$request_gambar = $_POST['request_gambar'];
	$alamat_kirim = $_POST['alamat_kirim'];
	
	// buat query update
	$sql = "UPDATE dilukisin SET nama='$nama', notelp='$notelp', media_lukis='$media_lukis', request_gambar='$request_gambar', alamat_kirim='$alamat_kirim' WHERE id_pemesanan=$id_pemesanan";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-pesanan.php
		header('Location: list-pesanan.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
