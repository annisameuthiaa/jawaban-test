<?php
include_once "koneksi.php";
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <div class="container">
          <h1>Daftar</h1>
            <form method="POST" action="koneksi.php?proses_daftar">

                <input type="hidden" name="tujuan" value="DAFTAR">

                <label>Nama</label>
                <br>
                <input name="nama" type="text">
                <br>
                <label>Notelp</label>
                <br>
                <input name="notelp" type="text">
                <br>
                <label>Email</label>
                <br>
                <input name="email" type="email">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>
                <button>Daftar</button>
                <p> Sudah punya akun?
                  <a href="login1.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>
