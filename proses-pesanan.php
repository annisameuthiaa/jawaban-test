<?php

include("configg.php");

// cek apakah tombol submit sudah diklik atau blum?
if(isset($_POST['submit'])){
	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$notelp = $_POST['notelp'];
	$media_lukis= $_POST['media_lukis'];
	$request_gambar = $_POST['request_gambar'];
	$alamat_kirim = $_POST['alamat_kirim'];
	
	// buat query
	$sql = "INSERT INTO dilukisin (nama, notelp, media_lukis, request_gambar, alamat_kirim) VALUE ('$nama', '$notelp', '$media_lukis', '$request_gambar', '$alamat_kirim')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
