<?php
session_start();
session_destroy();

echo "<script> alert('Anda berhasil logout');</script>";
echo "<script> location = 'login1.php'; </script>";
?>