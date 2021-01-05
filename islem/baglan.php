<?php  
error_reporting();
date_default_timezone_set('Europe/Istanbul');
@session_start();
$baglanti = new mysqli("localhost", "root", "", "filmsitem");

if ($baglanti->connect_error)
 {
    die("Bağlanamadı: " . $baglanti->connect_error);
} 
mysqli_set_charset($baglanti,"utf8");

?>