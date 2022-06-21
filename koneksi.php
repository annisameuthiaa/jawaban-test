<?php
class Koneksi {
    var $conn;
    function __construct()
    {
        session_start();
        $this->conn = mysqli_connect("localhost","root","","proweb");
    }

    
    public function proses_login() 
    {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM `daftar` WHERE `email` = '$email' AND `password` = '$password'";
        $result = $this->conn->query($sql);
        if($result->fetch_assoc() > 0) {
            $_SESSION['email'] = $email;
            header("location: index.php");
        }else{
            echo "<script> alert('Periksa Kembail'); </script>";
            echo "<script> location = 'login1.php'; </script>";
        }
    }

    public function proses_daftar()
    {
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $email = $_POST['email'];
        $password= md5($_POST['password']);

        $sql = "SELECT * from daftar WHERE email = '$email' or password = '$password'";
        $result = $this->conn->query($sql);
        
        if($result->fetch_assoc() > 0) {
            echo "<script> alert('Data Sudah Terpakai'); </script>";
            echo "<script> location = 'daftar1.php'; </script>";
        } else {
            $sql = "INSERT INTO daftar(nama,notelp,email,password) values ('$nama','$notelp','$email','$password')";
            $this->conn->query($sql);

            echo "<script> alert('Akun Berhasil dibuat'); </script>";
            echo "<script> location = 'login1.php'; </script>";
        }
    }

    public function proses_logout()
    {
        session_destroy();
        echo "<script> alert('Anda Berhasil Logout'); </script>";
        echo "<script> location = 'login1.php'; </script>";
    }
}


$koneksi = new Koneksi();

if(isset($_GET['proses_login'])){
    $koneksi->proses_login();
}
if(isset($_GET['proses_daftar'])){
    $koneksi->proses_daftar();
}
if(isset($_GET['proses_logout'])){
    $koneksi->proses_logout();
}