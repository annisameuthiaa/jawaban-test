<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php 

include("config.php");

if( !isset($_GET['id_pemesanan']) ){
	// kalau tidak ada id di query string
	header('Location: list-pesanan.php');
}

//ambil id dari query string
$id_pemesanan = $_GET['id_pemesanan'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dilukisin WHERE id_pemesanan=$id_pemesanan";
$query = mysqli_query($db, $sql);
$dilukisin = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>

	<title>Pemesanan Jasa Dilukisin</title>
</head>
<br>
<body style ="background-color: rgb(236, 206, 211)"></body>
<body>
    <div class="text-center">
		<h3 class="display-4 text-secondary">PEMESANAN JASA DILUKISIN</h3>
    </div>
	<br>
    <br>

	<form action="proses-edit.php" method="POST">
	<div class="container">		
		<fieldset>
			
			<input type="hidden" name="id_pemesanan" value="<?php echo $dilukisin['id_pemesanan'] ?>" />
			<div class="container-fluid">
		<div class="mb-3">
			<label class="form-label" for="nama">Nama </label>
			<input type="text" class="form-control" name="nama" placeholder="nama lengkap" value="<?php echo $dilukisin['nama'] ?>" />
		</div>
		<div class="mb-3">
			<label class="form-label" for="notelp">Nomor Telepon</label>
			<input type="text" class="form-control" name="notelp" placeholder="Nomor telepon" value="<?php echo $dilukisin['notelp'] ?>" />
		</div>
		<div class="mb-3">
        <label class="form-label" for="media_lukis">Media Lukis</label>
			<?php $media_lukis = $dilukisin['media_lukis']; ?>
			<select class="form-select mt-3" name="media_lukis">
				<option <?php echo ($media_lukis == 'Kanvas') ? "selected": "" ?>>Kanvas</option>
				<option <?php echo ($media_lukis == 'Totebag') ? "selected": "" ?>>Totebag</option>
				<option <?php echo ($media_lukis == 'Sepatu') ? "selected": "" ?>>Sepatu</option>
				<option <?php echo ($media_lukis == 'Denim') ? "selected": "" ?>>Denim</option>
			</select>
		</div>
		<div class="mb-3">
			<label class="form-label" for="request_gambar">Request Gambar</label>
			<?php $request_gambar = $dilukisin['request_gambar']; ?>
			<select class="form-select mt-3" name="request_gambar">
				<option <?php echo ($request_gambar == 'Bunga') ? "selected": "" ?>>Bunga</option>
				<option <?php echo ($request_gambar == 'Hewan') ? "selected": "" ?>>Hewan</option>
				<option <?php echo ($request_gambar == 'Abstrak') ? "selected": "" ?>>Abstrak</option>
				<option <?php echo ($request_gambar == 'Kartun') ? "selected": "" ?>>Kartun</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="alamat_kirim">Alamat Pengiriman</label>
			<input type="text" class="form-control" name="alamat_kirim" placeholder="alamat pengiriman" value="<?php echo $dilukisin['alamat_kirim'] ?>" />
		</div>
		<div>
			<input type="submit" class="btn btn-dark" value="Simpan" name="simpan" />
		</div>
		
		</fieldset>
		
	
	</form>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>