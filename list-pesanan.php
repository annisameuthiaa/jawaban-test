<?php include("config.php"); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Pemesanan Jasa Dilukisin</title>
</head>
<br>
<br>
<body>
	<header class="text-center">
		<h3 class="display-4 text-secondary">PESANAN YANG MASUK</h3>
	</header>
	<br>

    <div class="container">
	<div>
		<a class="btn btn-dark" href="form-pesanan.php" role="button">Tambah Baru</a>
	</div>
	
	<br>
	
	<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">Nama</th>
			<th scope="col">No Hp</th>
			<th scope="col">Jenis Pesanan</th>
			<th scope="col">Alamat</th>
			<th scope="col">Alamat Pengiriman</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
</div>
		
		<?php
		$sql = "SELECT * FROM dilukisin";
		$query = mysqli_query($db, $sql);
		
		while($dilukisin = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$dilukisin['id_pemesanan']."</td>";
			echo "<td>".$dilukisin['nama']."</td>";
			echo "<td>".$dilukisin['notelp']."</td>";
			echo "<td>".$dilukisin['media_lukis']."</td>";
			echo "<td>".$dilukisin['request_gambar']."</td>";
			echo "<td>".$dilukisin['alamat_kirim']."</td>";
			
			echo "<td>";
			echo "<a href='form-edit.php?id_pemesanan=".$dilukisin['id_pemesanan']."'> Edit </a> | ";
			echo "<a href='hapus.php?id_pemesanan=".$dilukisin['id_pemesanan']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
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