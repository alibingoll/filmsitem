<?php include ('includes/menu.php'); ?>

    <div class="container">

    <div></div>


<?php
if (isset($_SESSION['kullanici'])) 
{ ?>
      <div class="bg-faded p-4 my-4" align="center">
        <div align="center">

         <img src="img/profile.png">

        </div>
        <hr class="divider">
        <h2 class="text-lg text-uppercase my-0">PROFİLİM</h2>
        <hr class="divider">

       <h2 class="text-lg text-uppercase my-0">Ad Soyad: <label><?php echo htmlentities($_SESSION['kullanici']); ?></label> </h2>

       <h2 class="text-lg text-uppercase my-0">Şifre: <label>*********</label></h2>

       <h2 class="text-lg text-uppercase my-0">E-Posta: <label><?php echo $_SESSION['email'];  ?></label> </h2>

     <h2 class="text-lg text-uppercase my-0">Şehir: <label><?php echo $_SESSION['il']; ?>  </label> </h2>
  </div>
<?php }
else {
  echo "<center>LÜTFEN ÖNCE GİRİŞ YAPINIZ</center>";
}

 ?>

</div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
