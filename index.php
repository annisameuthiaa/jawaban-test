<?php
include_once "koneksi.php";
if(!isset($_SESSION['email'])) {
    echo "<script> alert('sesi anda telah habis silahkan login kembali');</script>";
    echo "<script> location = 'login1.php'; </script>";
  }
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dilukisin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
</head>
<body>

    <!---loader-->
    <div class="bg-loader">
        <div class="loader"></div>
    </div>
    
    <!--header-->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="index.php">Dilukisin</a></h1>
            <ul>
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="login1.php">Login</a></li>
                <li><a href="form-pesanan.php">Pesan Sekarang</a></li>
                <li><a href="list-pesanan.php">Daftar Pesanan</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Service.html">Service</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>

            </ul>
        </div>
    </header>
    <!---banner-->
    <section class="banner">
        <h2>Selamat Datang</h2>
    </section>
    <section class="about">
        <div class="container">
            <h3>About</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting .<strong> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled </strong>it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
        </div>
    </section>
    <!---service-->
    <section class="service">
        <div class="container">
            <h3>Service</h3>
            <div class="box">
                <div class="col-4">
                    <div class="icon"><i class="fas fa-mobile"></i></div>
                    <h4>Mobile App</h4>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="fas fa-globe"></i></div>
                    <h4>Web Development</h4>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="fas fa-edit"></i></div>
                    <h4>Design</h4>
                </div>
                <div class="col-4">
                    <div class="icon"><i class="fas fa-chart-bar"></i></div>
                    <h4>Digital</h4>
                </div>
            </div>
        </div>  
        
        <section>
            <!----footer-->
            <footer>
                <div class="container">
                    <small>Copyright &copy; 2020 - Dilukisin. ALL Rights reserved</small>
                </div>
            </footer>
        </section>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".bg-loader").hide();
        })
        </script>
</body>
</html>
