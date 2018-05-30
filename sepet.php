<?php 
include "header.php";
include "baglan.php";
include "islem.php";
session_start();

if(!isset($_SESSION['uye_email'])){ 
	header('Location:index.php');
}
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
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<?php if(!isset($_SESSION['uye_email'])){ ?>
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

	<?php 
			$uye_id = $_SESSION['uye_id'];
			$query = "select * from sepet where uye_id= '$uye_id' and tamamlandi = 0";  
            $result = mysqli_query($baglan, $query);
            $sepet_id = 0;
				if(mysqli_num_rows($result) > 0)  
		         {  
		            $degerler = mysqli_fetch_array($result);
            		$sepet_id = $degerler['id'];

            	}else{
            		$sepet_id = 0;
            	}
            	
            if($sepet_id != 0){
            	$query1 = "select * from sepet_urun INNER JOIN urun ON sepet_urun.urun_id = urun.urun_id 
            	where sepet_urun.sepet_id = '$sepet_id' ";
            	$result1 = mysqli_query($baglan, $query1);
            }	
                  

           
	 ?>
            	
	<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="index.php">Anasayfa</a> <span class="divider">/</span></li>
		<li class="active">Sepetim</li>
    </ul>



	<div class="well well-small">
		<form action="islem.php" method="POST" class="form-horizontal loginFrm" <?php echo $row["urun_id"]; ?>>

		<h1>Sepetiniz</h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Ürün</th>
                  <th>Ürün Hakkında</th>
                  <th>Ürün Fiyatı</th>
                  <th>Adet </th>
                  <th>Toplam</th>
				</tr>
              </thead>
              <tbody>
               

               <!-- Ürün Tablosu -->
                <?php if($sepet_id != 0) {   
                		while($row = mysqli_fetch_array($result1))  
		                     { 


                	?>
				<tr id="<?php echo $row["id"]; ?>">


                  <td><img width="100" src="<?php echo $row["urun_url"]; ?>" alt=""/></td>
                  <td>Ürün Adı: <br><?php echo $row["urun_adi"]; ?></td>
                
                 
                  <td class="fiyat"><?php echo $row["urun_fiyat"]; ?> TL</td>
                  <td>


				  <input class="inpAdet span1" style="max-width:34px" value="1" placeholder="1" size="16" type="text">
				  <div class="input-append">
					<button class="btnAzalt btn btn-mini" onclick="adetAzalt(this);" data-index="<?php echo $row["id"]; ?>" type="button">-</button>
					<button class="btnArttir btn btn-mini" onclick="adetArttir(this);" type="button" data-index="<?php echo $row["id"]; ?>">+</button>
					<!-- Sil -->
					<button class="sepetsil btn btn-mini btn-danger" data-title="<?php echo $row["id"]; ?>" type="button"><span class="icon-remove"></span></button>
				</div>
				  </td>
                  <td class="inpToplam"><?php $toplam = $row["urun_fiyat"] * $row["adet"];
                  echo $toplam; ?> TL</td>
                </tr>

                <?php }
                } ?>
				<!-- /Ürün Tablosu -->


                
				</tbody>
            </table><br/>
		
		
					
	<a href="index.php" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Alışverişe Devam </a>
	<a href="sepet.php" class="shopBtn btn-large pull-right">Alışverişi Tamamla <span class="icon-arrow-right"></span></a>

</div>
</form>
</div>
</div>
<!-- 
Clients 
-->
<?php include 'footer.php'; ?>
<script>
	

	$(document).ready(function(){

		/*$('.btnArttir').on('click', function(e){
			var id = $(this).attr('data-index');
			var input = $('#'+id+" #inpAdet");
			console.log("inp", input.val());
		});*/

		$('.sepetsil').on('click', function(e){
			e.preventDefault();

			var id = $(this).attr('data-title');

			$.ajax({
				type: 'POST',
				url: 'sepetsil.php',
				data: 'del_id='+id,
				success: function(msg) {
					$('#'+id).remove();
					location.reload();
					


				},
				error: function(msg){
					console.log('hata', msg);
				}
			});


		});
	});

	function adetArttir(obje){
		var id = $(obje).attr('data-index');
		var input = $('#'+id+" .inpAdet");
		var result = $('#'+id+" .inpToplam");
		var fiyat = $('#'+id+" .fiyat");
		fiyat = parseFloat(fiyat.html());
		
		var adet = parseFloat(input.val())+1;
		input.val(adet);
		var sonuc = adet * fiyat;
		result.html(sonuc + " TL");


	}

	function adetAzalt(obj){
		var id = $(obj).attr('data-index');
		var input = $('#'+id+" .inpAdet");
		var result = $('#'+id+" .inpToplam");
		var fiyat = $('#'+id+" .fiyat");
		fiyat = parseFloat(fiyat.html());
		
		var anlik = parseFloat(input.val());
		var adet;
		if(anlik > 1){
			adet = parseFloat(input.val())-1;
			input.val(adet);
			var sonuc = adet * fiyat;
			result.html(sonuc + " TL");
		}
		
		
		
	}

</script>
