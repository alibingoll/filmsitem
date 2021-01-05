<?php include('includes/menu.php'); ?>
<head><script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script></head>

    <div class="container" >
 <div class="bg-faded p-4 my-4" align="center">

  <?php if (isset($_SESSION['kullanici'])) { ?>
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Film
          <strong>Ekle</strong>
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

        
        <form action="islem/islem.php" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                      <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Ön Resim Seç(250x150).</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="filmgorsel1">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>
                        <div class="">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <span class="btn btn-file btn-default">
                                    <span class="fileupload-new">Arka Resim Seç(843x403)</span>
                                    <span class="fileupload-exists">Değiştir</span>
                                    <input type="file" name="filmgorsel2">
                                </span>
                                <span class="fileupload-preview"></span>
                                <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
                            </div>
                        </div>

                    </div>

                 <div class="form-group">
                            <label>Film Başlığı</label>
                            <input class="form-control" type="text" name="filmbaslik" placeholder="Film başlığı Giriniz">
                  </div>
                    <div class="form-group">
                            <label>Kategori</label>
                            <select name="kategori" class="form-control">
                                <option value="1">Komedi</option>
                                <option value="2">Aksiyon</option>
                                <option value="3">Dram</option>
                               <option value="4">Macera</option>
                               <option value="5">Savaş</option>
                               <option value="0" selected="">Diğer</option>
                            </select>
                  </div>

                  <div class="form-group">
                            <label>Film Detay</label>
                            <textarea name="filmdetay" class="ckeditor"></textarea>
                  </div>
                
                                
                <button type="submit" class="btn btn-lg btn-success" name="film_ekle">Film Ekle</button>

                </form>

        <?php }
else{ ?>
echo ("<script LANGUAGE='JavaScript'> window.alert('FİLM YÜKLEMEK İÇİN GİRİŞ YAPMALISINIZ!');
      window.location.href='giris.php';
      </script>");
<?php } ?>

         
      </div>
      </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 </body>

</html>
