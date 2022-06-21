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
<body style ="background-color: rgb(236, 206, 211)"></body>
<body>
<div class="jumbotron jumbotron-fluid text-center bg-light">
        <div class="container">
    
                <div class="col">
                    <img src="gambar/panda-bear.png" alt="" width="10%">
                </div>
            </div>
		<h3 class="display-4 text-secondary">PEMESANAN JASA DILUKISIN</h3>
    </div>
	<br>
    <br>

	<form action="proses-pesanan.php" method="POST">
	<div class="container">	
		<fieldset>
		
		<div class="mb-3">
			<label for="nama" class="form-label">Nama</label>
			<input type="text" class="form-control" id="name" name="nama" placeholder="nama lengkap" />
		</div>
		<div class="mb-3">
			<label for="notelp" class="form-label">Nomor Telepon</label>
			<input type="text" class="form-control" id="notelp" name="notelp" placeholder="nomor telepon" />
		</div>
		<div class="mb-3">
        <label class="form-label">Media Lukis</label>
        <select class="form-select mt-3" name="media_lukis" required>
            <option selected disabled value="">Pilih Media Lukis</option>
            <option value="Kanvas">Kanvas</option>
            <option value="Totebag">Totebag</option>
            <option value="Sepatu">Sepatu</option>
            <option value="Denim">Denim</option>
        </select>
      </div>
	  <div class="mb-3">
        <label class="form-label">Request Gambar</label>
        <select class="form-select mt-3" name="request_gambar" required>
            <option selected disabled value="">Request Gambar</option>
            <option value="Bunga">Bunga</option>
            <option value="Hewan">Hewan</option>
            <option value="Abstrak">Abstrak</option>
            <option value="Kartun">Kartun</option>
        </select>
      </div>
		<div class="mb-3">
			<label class="form-label" for="alamat_kirim">Alamat Pengiriman </label>
			<input type="text" class="form-control" id="alamat_kirim" name="alamat_kirim" placeholder="alamat pengiriman" />
		</div>
		<br>
		<div>
			<input type="submit" class="btn btn-dark" value="Submit" name="submit" />
		</div>
		
		</fieldset>

</div>

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