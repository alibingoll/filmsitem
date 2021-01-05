<?php 
session_start();
unset($_SESSION['kullanici']);
unset($_SESSION['email']);
unset($_SESSION['il']);
unset($_SESSION['uyeid']);

header('location:giris.php');
 ?>