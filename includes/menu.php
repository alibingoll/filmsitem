<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FİLM</title>

   <link href="css/bootstrap.css" rel="stylesheet" />
   <link href="css/font-awesome.css" rel="stylesheet" />
   <link href="css/basic.css" rel="stylesheet" />
   <link href="css/custom.css" rel="stylesheet" />
   <link href="css/ali.css" rel="stylesheet">
   <link href="css/dropdown.css" rel="stylesheet" type="text/css">
   <link href="css/business-casual.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">


   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <style>
    body {
    background-image: url("img/site.jpg");
    background-attachment: fixed;
    -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   -webkit-background-size: 100% 100%;
   background-size: 100% 100%;
      }

    </style>

  </head>


<body>
  
   <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block"><a>FİLM</a></div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">

   Film Bulalım

 </div>
    <!-- Navigation -->

   <nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4" style="opacity: 1;">
 <div class="container">
  <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="index.html">FİLM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Anasayfa
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="hakkinda.php">Hakkında</a>
            </li>
            <li class="nav-item px-lg-4">
             <div class="dropdown">
  <div class="nav-link text-uppercase text-expanded">KATEGORİLER</div>
  <div class="dropdown-content">
    <a href="kategori.php?id=1">Komedi</a>
    <a href="kategori.php?id=2">Aksiyon</a>
    <a href="kategori.php?id=3">Dram</a>
    <a href="kategori.php?id=4">Macera</a>
    <a href="kategori.php?id=5">Savaş</a>
    <a href="kategori.php?id=0">Diğer</a>
  </div>
</div>
            </li>
      
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="iletisim.php">İLETİŞİM</a>
       </li>


<?php
if (!isset($_SESSION['kullanici'])) 
{ ?>
  <li class="nav-item px-lg-4">
      <a class="nav-link text-uppercase text-expanded" href="giris.php">GİRİŞ | KAYIT OL</a>
</li>
  
<?php }
else { 

  ?>

<li>
  <div class="dropdown">
  <div class="nav-link text-uppercase text-expanded">HOŞGELDİN <?php echo htmlentities($_SESSION['kullanici']); ?></div>
  <div class="dropdown-content">
    <a href="profilim.php">PROFİLİM</a>
    <a href="yukle.php">Film Yükle</a>
   <a href="cikis.php">ÇIKIŞ</a>
    </div>
</div>
  </li>

<?php } ?>


    


    </ul>
          
        </div>
    
      </div>
 <form action="ara.php" method="get">
<input type="text" placeholder="Arama" name="terim">
</form>
    </nav>