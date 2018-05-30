<?php 
include "header.php";
 ?>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.php">Anasayfa</a></li>
			  <li class="active"><a href="kadin.php">Kadın</a></li>
			  <li class=""><a href="erkek.php">Erkek</a></li>
			  <li class=""><a href="cocuk.php">Çocuk</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>

			<?php if(!isset($_SESSION['uye_email'])){ ?>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Oturum Aç <b class="caret"></b></a>
				<div class="dropdown-menu">	

				<form action="islem.php" method="POST" class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" name="uye_email" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" name="uye_sifre" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Hatırla
					</label>
					<button type="submit" name="oturum" class="shopBtn btn-block"> Oturum Aç</button>
				  </div>
				</form>

				</div>
			</li>
			</ul>
			<?php }
			else { ?>				
			<ul class="nav pull-right">
			<li class="">
				<a href=""><?php echo $_SESSION['uye_adi']; echo " ".$_SESSION['uye_soyadi']; ?></a>
			</li>
			<li class="">
				<a href="logout.php">Çıkış Yap</a>
			</li>
			</ul>

			<?php } ?>
			<!-- /Oturum Aç -->
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
<!-- 
Three column view
-->
	<h3>Kadın </h3>
			<form method="POST" action="islem.php" class="form-horizontal loginFrm">
			<ul class="thumbnails">
			<?php  
			$query =" select * from urun where urun_cinsi='kadin'";  
		    $result = mysqli_query($baglan, $query);  

			if(mysqli_num_rows($result) > 0)  
		                {  
		                     while($row = mysqli_fetch_array($result))  
		                     {  
                ?>  
		
				<li class="span4">
				  <div class="thumbnail">

				  	 <?php if(isset($_SESSION['uye_email'])){ ?>
					<a href="denemegozluk.php" class="overlay"></a>
					<a class="zoomTool" href="denemegozluk.php?gozluk=<?php echo $row['urun_id'] ?>" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="denemegozluk.php?gozluk=<?php echo $row['urun_id'] ?>"><img width="400px" src="<?php echo $row["urun_url"]; ?>" name="<?php echo $row["urun_adi"]; ?>" alt=""  ></a>
					<?php } else{ ?>
					<a href="kayit.php" class="overlay"></a>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="kayit.php"><img src="<?php echo $row["urun_url"]; ?>" name="<?php echo $row["urun_adi"]; ?>" alt=""  ></a>
					<?php } ?>
					<div class="caption cntr">
						<p ><?php echo $row["urun_adi"]; ?></p>
						<p><strong> <?php echo $row["urun_fiyat"]; ?> TL</strong></p>
						<form action="islem.php" method="POST">
							<input type="hidden" name="urun_id" value="<?php echo $row['urun_id']; ?>">
							<input type="hidden" name="sepet_id" value="<?php echo $row['sepet_id']; ?>">
							<h4><button class="shopBtn" type="submit" title="add to cart" name="sepetekle"> Sepete Ekle </button></h4>
						</form>
						
						<br class="clr">
					</div>
				  </div>
				</li>
 
				<?php  
                     }  
                }  
                ?> 
</ul>
</form>

			<!--	<li class="span4">
				  <div class="thumbnail">
				  	 <?php /*if(isset($_SESSION['uye_email'])){ ?>
					<a href="deneme.php" class="overlay"></a>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="deneme.php"><img src="assets/img/8.jpg" alt="" name="urun_adi"  ></a>
					<?php } else{ ?>
					<a href="kayit.php" class="overlay"></a>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="kayit.php"><img src="assets/img/8.jpg" name="urun_adi" alt=""  ></a>
					<?php } ?>
					<div class="caption cntr">
						<p>Glasses</p>
						<p><strong> $22.00</strong></p>
						<h4><a class="shopBtn" href="sepet.php" title="add to cart" name="sepetekle"> Sepete Ekle </a></h4>
						
						<br class="clr">
					</div>
				  </div>
				</li>
				<li class="span4">
				  <div class="thumbnail">
				  	 <?php if(isset($_SESSION['uye_email'])){ ?>
					<a href="deneme.php" class="overlay"></a>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="deneme.php"><img src="assets/img/16.jpg" alt="" name="urun_adi" width="253px"></a>
					<?php } else{ ?>
					<a href="kayit.php" class="overlay"></a>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="kayit.php"><img src="assets/img/16.jpg" name="urun_adi" alt="" width="253px" ></a>
					<?php } ?>
					<div class="caption cntr">
						<p>Glasses</p>
						<p><strong> $22.00</strong></p>
						<h4><a class="shopBtn" href="sepet.php" title="add to cart" name="sepetekle"> Sepete Ekle </a></h4>
						
						<br class="clr">
					</div>
				  </div>
				</li>
			  </ul>


			<ul class="thumbnails">
				<li class="span4">
				  <div class="thumbnail">
				  	 <?php if(isset($_SESSION['uye_email'])){ ?>
					<a href="deneme.php" class="overlay"></a>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="deneme.php"><img src="assets/img/k1.jpg" alt="" name="urun_adi"></a>
					<?php } else{ ?>
					<a href="kayit.php" class="overlay"></a>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="kayit.php"><img src="assets/img/k1.jpg" name="urun_adi" alt=""  ></a>
					<?php } ?>
					<div class="caption cntr">
						<p>Glasses</p>
						<p><strong> $22.00</strong></p>
						<h4><a class="shopBtn" href="sepet.php" title="add to cart" name="sepetekle"> Sepete Ekle </a></h4>
						 
						<br class="clr">
					</div>
				  </div>
				</li>
				<li class="span4">
				  <div class="thumbnail">
				  	 <?php if(isset($_SESSION['uye_email'])){ ?>
					<a href="deneme.php" class="overlay"></a>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="deneme.php"><img src="assets/img/k2.jpg" alt="" name="urun_adi" width="280px" ></a>
					<?php } else{ ?>
					<a href="kayit.php" class="overlay"></a>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="kayit.php"><img src="assets/img/k2.jpg" name="urun_adi" alt=""  width="280px" ></a>
					<?php } ?>
					<div class="caption cntr">
						<p>Glasses</p>
						<p><strong> $22.00</strong></p>
						<h4><a class="shopBtn" href="sepet.php" title="add to cart" name="sepetekle"> Sepete Ekle </a></h4>
						 
						<br class="clr">
					</div>
				  </div>
				</li>
				<li class="span4">
				  <div class="thumbnail">
				  	 <?php if(isset($_SESSION['uye_email'])){ ?>
					<a href="deneme.php" class="overlay"></a>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="deneme.php"><img src="assets/img/k4.jpg" alt="" name="urun_adi" ></a>
					<div class="caption cntr">
						
					<?php } else{ ?>
					<a href="kayit.php" class="overlay"></a>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="kayit.php"><img src="assets/img/k4.jpg" name="urun_adi" alt=""  ></a>
					<?php } */?>
						<p>Glasses</p>
						<p><strong> $22.00</strong></p>
						<h4><a class="shopBtn" href="sepet.php" title="add to cart" name="sepetekle"> Sepete Ekle</a></h4>
						
						<br class="clr">
					</div>
				  </div>!-->
			

<!-- 
Clients 
-->
<?php include 'footer.php'; ?>