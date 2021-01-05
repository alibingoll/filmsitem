<?php include('includes/menu.php'); ?>

    <div class="container">
<?php if (!isset($_SESSION['kullanici'])) { ?>
<div class="bg-faded p-4 my-4" align="center">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">GİRİŞ
          <strong>YAP</strong>
        </h2>
        <font color="red">
        <?php 
          @$durum=$_GET['durum'];
          if ($durum=='no') 
          {
            echo "Giriş başarısız bilgilerinizi kontrol edip tekrar deneyiniz.";   }
         ?></font>
        
        <hr class="divider">
        <form align="center" method="POST" action="islem/islem.php">
          <div class="row">
            <div class="form-group col-lg-4" align="center">
             </div>
			 <div class="form-group col-lg-4">
              <label class="text-heading">E-Postanız</label>
              <input type="text" name="kadi" class="form-control">
			  <label class="text-heading">Şifreniz</label>
              <input type="password" name="sifre" class="form-control">
			   </div>
            <div class="form-group col-lg-12">
              <input type="submit" name="giris" value="GİRİŞ">
            </div>
          </div>
		  <a href="kayit.php">Hesap Oluştur</a>
        </form>

<?php } 
else { ?>
<hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">ZATEN GİRİŞ
          <strong>YAPTINIZ</strong>
        </h2>
        <hr class="divider">


<?php } ?>




      </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
