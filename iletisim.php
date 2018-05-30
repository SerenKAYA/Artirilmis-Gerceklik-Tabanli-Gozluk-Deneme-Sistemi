
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
			  <li class=""><a href="kadin.php">Kadın</a></li>
			  <li class=""><a href="erkek.php">Erkek</a></li>
			  <li class=""><a href="cocuk.php">Çocuk</a></li>
			</ul>


			<form  class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>

			<?php if(!isset($_SESSION['uye_email'])){ ?>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Oturum Aç <b class="caret"></b></a>
				<div class="dropdown-menu">

				<form action="islem.php" method="POST"  class="form-horizontal loginFrm">
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
	<hr class="soften">
	<div class="well well-small">
	<h1>Mağazalarımız</h1>
	<hr class="soften"/>	
	<div class="row-fluid">
		<div class="span8 relative">



		<iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=süleyman demirel üniversitesi batı&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>

		<div class="absoluteBlk">
		<div class="well wellsmall">
		<h4>İletişim Bilgileri</h4>
		<h5>
			Süleyman Demirel Üniveritesi Batı Kampüsü<br/>
			E-9 Kat:1 32260 Çünür/Isparta<br/><br/>
			 
			bilgisayarmuh@sdu.edu.tr<br/>
			﻿Tel : +90 246 211 13 82<br/>
			Fax : +90 246 237 08 59<br/>
			http://muhendislik.sdu.edu.tr
		</h5>
		</div>
		</div>
		</div>
		
		<div class="span4">
		<h4>E-Posta Gönder</h4>


		<form  method="POST" class="form-horizontal">
        <fieldset>
          <div class="control-group">
           
              <input type="text" placeholder="Adınız" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="E-mail" class="input-xlarge"/>
           
          </div>
		   <div class="control-group">
           
              <input type="text" placeholder="Konu" class="input-xlarge"/>
          
          </div>
          <div class="control-group">
              <textarea rows="3" id="textarea" class="input-xlarge"></textarea>
           
          </div>

            <button class="shopBtn" type="submit">Gönder</button>

        </fieldset>
      </form>

		</div>
	</div>

	
</div>
<!-- 
Clients 
-->
<?php include 'footer.php'; ?>