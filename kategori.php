<?php
include('includes/menu.php');
include('islem/baglan.php');

 ?>
<div class="container">


      <?php 
      @$id=$_GET['id'];
      if (empty($id) && !isset($id)) {
       header('location:index.php');
        
      }
      else 
      {

$filmsor=mysqli_query($baglanti,"SELECT * FROM filmler,uyeler WHERE filmler.uye_id = uyeler.uye_id and kategoriler like '$id' order by filmler.film_id desc");
//$adsor = mysqli_query($baglanti,"SELECT uyeler.uyeadsoyad FROM uyeler, filmler WHERE filmler.uye_id = uyeler.uye_id");

while ($filmcek = mysqli_fetch_assoc($filmsor)) 
  { 

    //$adcek = mysqli_fetch_assoc($adsor);
    ?>

<div class="bg-faded p-2 my-2" style="opacity: 0.8">
       <h7><?php echo "Eklenme Tarihi:  ".$filmcek['tarih']; ?> <p align="right">Yükleyen: <?php echo $filmcek['uyeadsoyad']; ?> </p></h7> 
        <center><h2><?php echo $filmcek['filmbaslik']; ?><p><b></b></p></h2><img height="150" width="250" src="<?php echo $filmcek['kucukresimyol']; ?>">
       </center> 
       <p>
          <?php echo substr($filmcek['filmdetay'],0,400)."..."; ?>
          

        <br><br><br>
	 
   <a href="filmdetay.php?url=<?php echo $filmcek['film_id']; ?>"> <button  type="submit" class="btn btn-success">Filmin Detayına Git</button> </a>
     </div>
     <?php } }?>
 </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
