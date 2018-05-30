<?php 
include "header.php";

 ?>

<?php if($_GET['login'] == 'no') {?>
<script>
	alert('Kullanıcı adı veya şifre hatalı');
</script>

<?php } ?>

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
			  <li class=""><a href="kadin.php">Kadın</a></li>
			  <li class=""><a href="erkek.php">Erkek</a></li>
			  <li class=""><a href="cocuk.php">Çocuk</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>

			<!-- Oturum Aç -->
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
	<div class="row">

	<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="assets/img/s1.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      
                    
                </div>
              </div>
			  <div class="item">
                <img style="width:100%" src="assets/img/s8.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      
                      
                </div>
              </div>
			  <div class="item active">
                <img style="width:100%" src="assets/img/s14.jpg" alt="bootstrap ecommerce templates">
                <div class="carousel-caption">
                      
                     
                </div>
              </div>
              <div class="item">
                <img style="width:100%" src="assets/img/s13.jpg" alt="bootstrap templates">
                <div class="carousel-caption">
                    
                </div>
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->
	<div class="well well-small">
	<h3>Yeni Ürünler </h3>
	<hr class="soften"/>
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  <ul class="thumbnails">

			  	
				<li class="span3">
				<div class="thumbnail">
					<?php if(isset($_SESSION['uye_email'])){ ?>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="#" class="tag"></a>
					<a href="deneme.php"><img src="assets/img/y6.jpg" alt="bootstrap-ring"></a>
					<?php } else{ ?>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="#" class="tag"></a>
					<a href="deneme.php"><img src="assets/img/y6.jpg" alt="bootstrap-ring"></a>
					<?php } ?>
				</div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  	<?php if(isset($_SESSION['uye_email'])){ ?>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="#" class="tag"></a>
					<a  href="deneme.php"><img src="assets/img/y1.jpg" alt=""></a>
					<?php } else{ ?>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="#" class="tag"></a>
					<a  href="deneme.php"><img src="assets/img/y1.jpg" alt=""></a>
					<?php } ?>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  	<?php if(isset($_SESSION['uye_email'])){ ?>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="#" class="tag"></a>
					<a  href="deneme.php"><img src="assets/img/y2.jpg" alt=""></a>
					<?php } else{ ?>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="#" class="tag"></a>
					<a  href="deneme.php"><img src="assets/img/y2.jpg" alt=""></a>
					<?php } ?>
				  </div>
				</li>
				<li class="span3">
				  <div class="thumbnail">
				  	<?php if(isset($_SESSION['uye_email'])){ ?>
					<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
					<a href="#" class="tag"></a>
					<a  href="deneme.php"><img src="assets/img/y8.jpg" alt=""></a>
					<?php } else{ ?>
					<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
					<a href="#" class="tag"></a>
					<a  href="deneme.php"><img src="assets/img/y8.jpg" alt=""></a>
					<?php } ?>
				  </div>
				</li>
			  </ul>
			  </div>
		   <div class="item">
		  <ul class="thumbnails">		  	
			<li class="span3">
			  <div class="thumbnail">
			  	<?php if(isset($_SESSION['uye_email'])){ ?>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y5.jpg" alt=""></a>
				<?php } else{ ?>
				<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y5.jpg" alt=""></a>
				<?php } ?>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
			  	<?php if(isset($_SESSION['uye_email'])){ ?>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y4.jpg" alt=""></a>
				<?php } else{ ?>
				<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y4.jpg" alt=""></a>
				<?php } ?>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
			  	<?php if(isset($_SESSION['uye_email'])){ ?>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y7.jpg" alt=""></a>
				<?php } else{ ?>
				<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y7.jpg" alt=""></a>
				<?php } ?>
			  </div>
			</li>
			<li class="span3">
			  <div class="thumbnail">
			  	<?php if(isset($_SESSION['uye_email'])){ ?>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y3.jpg" alt=""></a>
				<?php } else{ ?>
				<a class="zoomTool" href="kayit.php" title="add to cart"><span class="icon-search"></span> Üye Ol Dene</a>
				<a href="#" class="tag"></a>
				<a  href="deneme.php"><img src="assets/img/y3.jpg" alt=""></a>
				<?php } ?>
			  </div>
			</li>
		  </ul>
		  </div>
		   </div>
		  <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>
		<div class="row-fluid">
		  <form method="POST" action="islem.php" class="form-horizontal loginFrm">
			<ul class="thumbnails">
			<?php  
			$query =" select * from urun where urun_cinsi='index'";  
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
					<a href="denemegozluk.php?gozluk=<?php echo $row['urun_id'] ?>"><img width="200px" src="<?php echo $row["urun_url"]; ?>" name="<?php echo $row["urun_adi"]; ?>" alt=""  ></a>
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
		</div>
	</div>
	
	</div>
	</div>
<!-- 
Clients 
-->
<?php include 'footer.php' ?>