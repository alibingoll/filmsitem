<?php include('includes/menu.php'); ?>

    <div class="container" >
 <div class="bg-faded p-4 my-4" align="center">

  <?php if (!isset($_SESSION['kullanici'])) { ?>
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">KAYIT
          <strong>OL</strong>
        </h2>
        
          <?php 
          @$kayit_durum=$_GET['kayit']; 
          if ($kayit_durum=='ok') {
            echo "<font color='green'>Kayıt başarılı giriş yapabilirsiniz.</font>";
          }elseif ($kayit_durum=='no1') {
            echo "<font color='red'>Şifreler aynı değil!</font>";
          }
          elseif ($kayit_durum=='no') {
            echo "<font color='red'>Kayıt gerçekleştirilemedi lütfen dikkatli doldurup tekrar deneyiniz.</font>";
          }elseif ($kayit_durum=='no3') {
            echo "<font color='red'>Lütfen Boş alan bırakmayınız</font>";
          }


           ?>

        
        <hr class="divider">
        <h5 style="color: red;">
         </h5>

        <div style="margin-left: 250px;">
        <form   align="center" action="islem/islem.php" method="post">
          <div class="row" >
            <div class="form-group col-lg-4" align="center">
              <label class="text-heading">Adınız Soyadınız</label>
              <input type="text" name="ad_soyad" class="form-control">
			  <label class="text-heading">Email Adresiniz</label>
              <input type="email" name="mail" class="form-control">
			  <label class="text-heading">Telefon Numaranız</label>
              <input type="tel" name="tel" class="form-control">
             </div>
			 <div class="form-group col-lg-4">
              <label class="text-heading">Şifreniz</label>
              <input type="password" name="sifre" class="form-control">

			  <label class="text-heading">Şifreniz(Tekrar)</label>
        <input type="password"  name="sifre2" class="form-control">

        <label class="text-heading">Şehriniz</label>
        <select class="form-control" name="il">
          <option value="adana">Adana</option>
          <option value="Adıyaman">Adıyaman</option>
          <option value="Afyon">Afyon</option>
          <option value="Ağrı">Ağrı</option>
          <option value="Amasya">Amasya</option>
          <option value="Ankara">Ankara</option>
          <option value="Antalya">Antalya</option>
          <option value="Artvin">Artvin</option>
          <option value="Balıkesir">Balıkesir</option>
          <option value="Bilecik">Bilecik</option>
          <option value="Bingöl">Bingöl</option>
          <option value="Bitlis">Bitlis</option>
          <option value="Çanakkale">Çanakkale</option>
          <option value="Çankırı">Çankırı</option>
          <option value="Çorum">Çorum</option>
          <option value="Denizli">Denizli</option>
          <option value="Diyarbakır">iyarbakır</option>
          <option value="Edirne">Edirne</option>
          <option value="Elazığ">Elazığ</option>
          <option value="Erzincan">Erzincan</option>
          <option value="Erzurum">Erzurum</option>
          <option value="Eskişehir">Eskişehir</option>
          <option value="Gaziantep">Gaziantep</option>
          <option value="İstanbul">İstanbul</option>
          <option value="İzmir">İzmir</option>
          <option value="Kocaeli">Kocaeli</option>
          <option value="Kütahya">Kütahya</option>
          <option value="Sakarya">Sakarya</option>
          <option value="Trabzon">Trabzon</option>
          <option value="Yalova">Yalova</option>
          <option value="Düzce">Düzce</option>
        </select>
			  <hr></hr>
			  </div>
            <div class="form-group col-lg-12">
              <button type="submit" name="kayit_ol" class="btn btn-secondary">Kayıt Ol</button>
            </div>
          </div>
        </form>

        <?php }
else{ ?>
<hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">ZATEN GİRİŞ
          <strong>YAPTINIZ</strong>
        </h2>

        <hr class="divider">
<?php } ?>

         
      </div>
      </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 </body>

</html>
