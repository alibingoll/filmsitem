<?php 
include('baglan.php');
if (isset($_POST['giris'])===true)
 {


$kadi=$_POST['kadi'];
$sifre=md5($_POST['sifre']);


if ($kadi && $sifre)
 {
  $sorgula = mysqli_query($baglanti,"select * from uyeler where uyemail='$kadi' and uyesifre='$sifre'");
  $sorgulacek = mysqli_fetch_assoc($sorgula);
  $verisay = mysqli_num_rows($sorgula);

  if ($verisay>0)
  {
    $ad_soyad = $sorgulacek['uyeadsoyad'];
    $email = $sorgulacek['uyemail'];
    $il = $sorgulacek['uyeil'];
    $uyeid=$sorgulacek['uye_id'];

   $_SESSION['kullanici'] = $ad_soyad;
   $_SESSION['email'] = $email;
   $_SESSION['il'] = $il;
   $_SESSION['uyeid']=$uyeid;

   header('location:../index.php');
   }
   else 
   {
    header('location:../giris.php?durum=no');
   }
  }
  else 
   {
    header('location:../giris.php?durum=no');
   }
}


elseif (isset($_POST['kayit_ol'])===true) 

{
 
$adsoyad=$baglanti->real_escape_string($_POST["ad_soyad"]);
$mail=$baglanti->real_escape_string($_POST["mail"]);
$telefon=$baglanti->real_escape_string($_POST["tel"]);
$sifre=md5($baglanti->real_escape_string($_POST["sifre"]));
$sifre2=md5($baglanti->real_escape_string($_POST["sifre2"]));
$il=$baglanti->real_escape_string($_POST["il"]);

if (empty($adsoyad) || empty($mail) || empty($telefon) || empty($sifre) || empty($sifre2) || empty($il) ) {
 header('location:../kayit.php?kayit=no3');
}

  elseif ($sifre!==$sifre2) {
  header('location:../kayit.php?kayit=no1');
}
else{
$sql = "INSERT INTO uyeler (uyemail, uyesifre, uyeadsoyad, uyetelefon, uyeil)
VALUES ('$mail', '$sifre', '$adsoyad', '$telefon', '$il')";
if ($baglanti->query($sql) === TRUE) {
    header('location:../kayit.php?kayit=ok');
} else {
    header('location:../kayit.php?kayit=no');
}
}
}

elseif (isset($_POST['film_ekle'])===true)
{



$upluads_dir = "../uploads/";
@$tmp_name = $_FILES['filmgorsel1']["tmp_name"];
@$name = $_FILES['filmgorsel1']["name"];
$bs1= rand(20000,32000);
$bs2= rand(20000,32000);
$bs3= rand(20000,32000);
$bs4= rand(20000,32000);
$bs= $bs1.$bs2.$bs3.$bs4;
@move_uploaded_file($tmp_name, "$upluads_dir/$bs$name");

$upluads_dir2 = "../uploads/";
@$tmp_name2 = $_FILES['filmgorsel2']["tmp_name"];
@$name2 = $_FILES['filmgorsel2']["name"];
$bis1= rand(20000,32000);
$bis2= rand(20000,32000);
$bis3= rand(20000,32000);
$bis4= rand(20000,32000);
$bis= $bis1.$bis2.$bis3.$bis4;
@move_uploaded_file($tmp_name2, "$upluads_dir2/$bis$name2");

$filmbaslik=strip_tags($baglanti->real_escape_string($_POST['filmbaslik']));
$filmdetay=strip_tags($baglanti->real_escape_string($_POST['filmdetay']));
$kt=strip_tags($baglanti->real_escape_string($_POST['kategori']));

$refimgyol=substr($upluads_dir, 3)."/".$bs.$name;
$refimgyol2=substr($upluads_dir2, 3)."/".$bis.$name2;
$id=$_SESSION['uyeid'];
$tarih=date('d.m.Y H:i:s');
if ($filmbaslik && $filmdetay && $kt) {



$sql = "INSERT INTO filmler (uye_id, filmbaslik, filmdetay, tarih, kucukresimyol, buyukresimyol,kategoriler)
VALUES ('$id', '$filmbaslik', '$filmdetay', '$tarih', '$refimgyol', '$refimgyol2','$kt')";

if ($baglanti->query($sql) === TRUE) {
    echo ("<script LANGUAGE='JavaScript'> window.alert('Film Ekleme Başarılı');
          window.location.href='../index.php'; </script>");
} else {
    echo "ekleme başarısız";
}
}
else {
  echo ("<script LANGUAGE='JavaScript'> window.alert('Boş kısım bırakmayınız');
          window.location.href='../yukle.php'; </script>");
}
}
elseif (isset($_POST['yorum'])===true)
{
  $uye_id=$_SESSION['uyeid'];
  $film_id=$_POST['filmid'];
  $yorum=$_POST['yorum_icerik'];
  $tarih=date('d.m.Y H:i:s');

  $sql = "INSERT INTO yorumlar (uye_id, film_id, yorum, tarih)
VALUES ('$uye_id', '$film_id', '$yorum', '$tarih')";
if ($baglanti->query($sql) === TRUE) {
     echo ("<script LANGUAGE='JavaScript'> window.alert('Yorum Ekleme Başarılı');
          window.location.href='../filmdetay.php?url=$film_id'; </script>");
} else {
     echo $baglanti->error;
}

}
?>