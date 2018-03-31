<?php include 'header.php'; ?> 

<?php include 'sidebar.php'; ?> 
	<!-- index göbek kısmı-->
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SİTE GENEL AYARLARI</h1>

                        <?php 
                            if ($_GET["durum"]==ok) { ?>
                                <h1 style="color: green;" class="page-subhead-line">Kayıtlar başarı ile güncellendi </h1>
                         <?php  }
                            else if ($_GET["durum"]==no) { ?>
                                <h1  style="color:red;" class="page-subhead-line">Kayıtlar güncellenemedi. </h1>
                         <?php }
                         else{ ?>
                                <h1 class="page-subhead-line">Sİteniz buradan düzenleyebilirsiniz.</h1>
                         <?php }
                        
                          ?>
                    </div>
                </div>
                <!-- /. ROW  -->


                <form action="netting/islem.php" method="POST">

                    <div class="form-group col-md-12">
                         <div class="form-group col-md-3">
                            <label>Site Başlığı</label>
                            <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">
                            <!-- <p class="help-block">Help text here.</p>-->
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-3">
                            <label>Site Açıklaması</label>
                            <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">
                            
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-9">
                            <label>Site Anahtar Kelimeler</label>
                            <input class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>">
                            
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                       <div class="form-group col-md-3">
                            <label>Telefon Numaranız</label>
                            <input class="form-control" type="text" name="ayar_telefon" value="<?php echo $ayarcek['ayar_telefon']; ?>">
                            
                        </div>

                        <div class="form-group col-md-3">
                            <label>Facebook Adresi</label>
                            <input class="form-control" type="text" name="ayar_facebook" value="<?php echo $ayarcek['ayar_facebook']; ?>">
                            
                        </div>

                        <div class="form-group col-md-3">
                            <label>Twitter Adresi</label>
                            <input class="form-control" type="text" name="ayar_twitter" value="<?php echo $ayarcek['ayar_twitter']; ?>">
                            
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <div class="form-group col-md-12">
                            <label>Site Footer</label>
                            <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer']; ?>">
                            
                        </div>
                    </div>

                     <div class="form-group col-md-12">
                        <div class="form-group col-md-12">
                            <label>Adresiniz</label>
                            <input class="form-control" type="text" name="ayar_adres" value="<?php echo $ayarcek['ayar_adres']; ?>">
                            
                        </div>
                    </div>

                     <div class="form-group col-md-12">
                        <div class="form-group col-md-6">
                            <label>Mail Adresi</label>
                            <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ?>">
                            
                        </div>

                        <div class="form-group col-md-6">
                            <label>Faks Numarasi</label>
                            <input class="form-control" type="text" name="ayar_faks" value="<?php echo $ayarcek['ayar_faks']; ?>">
                            
                        </div>
                    </div>

                     <div class="form-group col-md-12">
                        <div class="col-md-4 col-sm-12">
                                <button type="submit" class="btn btn-danger" name="ayarkaydet">Ayarları Kaydet</button>
                        </div>
                    </div>

                </form>

            

            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include 'footer.php'; ?>