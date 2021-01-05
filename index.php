<?php
include('includes/menu.php');
include('islem/baglan.php');

 ?>



    <div class="container">
      <div class="bg-faded p-4 my-4">
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         </ol>




          <div class="carousel-inner" role="listbox">

         <div class="carousel-item active" style="opacity: 0.9;">
             <a href="filmdetay.php?url=4"> <img width="800" height="400"  class="d-block img-fluid w-100" src="img/1.jpg"></a>
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"><b>Avengers</b></h3>
               </div>
            </div>

            <div class="carousel-item" style="opacity: 0.9;">
             <a href="filmdetay.php?url=8"> <img width="800" height="400"  class="d-block img-fluid w-100" src="uploads/28279239643043528291oa3b.jpg"></a>
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow"><b>Örümcek adam 3</b></h3>
               </div>
            </div>

         </div>




          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <!-- Welcome Message -->
      </div>
      
<?php 
$filmsor=mysqli_query($baglanti,"SELECT * FROM filmler,uyeler WHERE filmler.uye_id = uyeler.uye_id order by filmler.film_id desc");
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
     <?php } ?>
 </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
