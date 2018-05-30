<?php 
include "header.php";
include "baglan.php";
include "islem.php";
if(isset($_SESSION['uye_email'])){ 
	header('Location: index.php');
	}
 ?>
<?php if($_GET['kayit'] == 'no') {?>
<script>
	alert('Kayıt yapılamadı. Email adresi daha önceden kaydedilmiş.');

</script>

<?php } ?>


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
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">

	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">Ücretsiz Kayıt</li>
    </ul>



	<h3> Ücretsiz Kayıt Olun</h3>	
	<hr class="soft"/>
	<div class="well">
	<form  action="islem.php" method="POST" class="form-horizontal">
		<h3>Kişisel Bilgileriniz</h3>

		<div class="control-group">
		<label class="control-label">Cinsiyet <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="uye_cinsiyet">
			<option value="">-</option>
			<option value="Kadın">Kadın</option>
			<option value="Erkek">Erkek</option>
			
		</select>
		</div>
		</div>
			
		
		<div class="control-group">
			<label class="control-label"  for="inputFname">Adınız <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" name="uye_adi" placeholder="Adınız">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label"  for="inputLname">Soyadınız <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" name="uye_soyadi" placeholder="Soyadınız">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label"  for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" name="uye_email" placeholder="Email">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label" >Şifre <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="uye_sifre" placeholder="Şifre">
		</div>
	  </div>
		
	<div class="control-group">
		<div class="controls">
		 <button type="submit" name="uyekayit"  class="btn btn-primary"> Kayıt Ol</button> 
		</div>
	</div>
	</form>
</div>
</div>
</div>
<!-- 
Clients 
-->
<?php include 'footer.php'; ?>