<?php

include_once "koneksi.php";
if(isset($_SESSION['email'])) {
    echo"<script>alert('Anda Sudah Login')</script>";
    echo"<script>location='index.php'</script>";
}
?>
<!DOCTYPE HTML>


<html>

    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="POST" action="koneksi.php?proses_login">

                <input name="tujuan" type="hidden" value="LOGIN" >
                
                <label>Email</label>
                <input name="email" type="email">
                <br>
                <label>Password</label>
                <br>
                <input name="password" type="password">
                <br>

                <button type='submit' name='submit'>Log In</button>
                
                <p> Belum punya akun?
                  <a href="daftar1.php">Daftar di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>
