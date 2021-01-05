<?php include 'includes/menu.php';
include 'islem/baglan.php';
 ?>


 <div class="container">

<?php 
$filmid=$_GET['url'];
$filmsor=mysqli_query($baglanti,"SELECT * FROM filmler,uyeler WHERE film_id=$filmid ");
$filmcek = mysqli_fetch_assoc($filmsor);
 ?>

      <div class="bg-faded p-1 my-1">
        <!-- Image Carousel -->
        <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="<?php echo $filmcek['buyukresimyol']; ?>" alt="">
              <div class="carousel-caption d-none d-md-block">
              
              </div>
            </div>
             </div>
          
        </div>
        <!-- Welcome Message -->
      
        <div class="text-center mt-4">
          <div class="text-heading text-muted text-lg">FİLM</div>
          <h1 class="my-2"><?php echo $filmcek['filmbaslik']; ?></h1>
          <div class="text-heading text-muted text-lg">
            
      </div>
        </div>
      </div>

    

      <div class="bg-faded p-4 my-4" style="opacity:0.8; margin-top: 10px;">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">FİLM
          <strong>DETAYI</strong>
        </h2>
        <hr class="divider">
       <?php /* ?> <p align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/EQdOOTQnuvk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p> <?php */ ?>
        <br>
        <?php echo $filmcek['filmdetay']; ?>
</div>


<?php $yorumsor=mysqli_query($baglanti,"SELECT * FROM yorumlar,uyeler WHERE film_id=$filmid and uyeler.uye_id=yorumlar.uye_id order by yorum_id desc"); ?>
<?php while ($yorumcek = mysqli_fetch_assoc($yorumsor)) { ?>

<div class="bg-faded p-3 my-3" style="opacity:0.8; margin-top: 10px;">
        <?php echo htmlentities($yorumcek['uyeadsoyad']); ?> | <h7 align="right"> <?php echo $yorumcek['tarih']; ?></h7>
        <hr>
        <?php echo htmlentities($yorumcek['yorum']); ?>
        </div>
<?php } ?>




        
	  <div>
	   <?php if (isset($_SESSION['kullanici'])) { ?>
	  <form action="islem/islem.php" method="post">
    <textarea name="yorum_icerik" class="form-control" rows="4" cols="5"></textarea>
    <input type="hidden" name="filmid" value="<?php echo $filmid; ?>">
  <br><button name="yorum" type="submit" class="btn btn-lg btn-success">Yorum Yap</button>
  </form>
  <?php }
else{
  echo "YORUM YAPABİLMEK GİRİŞ YAPINIZ";
}
   ?>
   </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
