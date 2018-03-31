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
			
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Oturum Aç <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Hatırla
					</label>
					<button type="submit" class="shopBtn btn-block"> Oturum Aç</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
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

		<ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="deneme.php" class="overlay"></a>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="deneme.php"><img src="assets/img/2.jpg" alt=""  ></a>
				<div class="caption cntr">
					<p>Glasses</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="sepet.php" title="add to cart"> Sepete Ekle </a></h4>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="deneme.php" class="overlay"></a>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="deneme.php"><img src="assets/img/8.jpg" alt=""  ></a>
				<div class="caption cntr">
					<p>Glasses</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="sepet.php" title="add to cart"> Sepete Ekle </a></h4>
					
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="deneme.php" class="overlay"></a>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="deneme.php"><img src="assets/img/16.jpg" alt=""  width="253px"></a>
				<div class="caption cntr">
					<p>Glasses</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="sepet.php" title="add to cart"> Sepete Ekle </a></h4>
					
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>


		<ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="deneme.php" class="overlay"></a>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="deneme.php"><img src="assets/img/k1.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Glasses</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="sepet.php" title="add to cart"> Sepete Ekle </a></h4>
					 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="deneme.php" class="overlay"></a>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="deneme.php"><img src="assets/img/k2.jpg" alt="" width="280px" ></a>
				<div class="caption cntr">
					<p>Glasses</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="sepet.php" title="add to cart"> Sepete Ekle </a></h4>
					 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="deneme.php" class="overlay"></a>
				<a class="zoomTool" href="deneme.php" title="add to cart"><span class="icon-search"></span> Denemek İçin</a>
				<a href="deneme.php"><img src="assets/img/k4.jpg" alt=""  ></a>
				<div class="caption cntr">
					<p>Glasses</p>
					<p><strong> $22.00</strong></p>
					<h4><a class="shopBtn" href="sepet.php" title="add to cart"> Sepete Ekle</a></h4>
					
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>

<!-- 
Clients 
-->
<?php include 'footer.php'; ?>