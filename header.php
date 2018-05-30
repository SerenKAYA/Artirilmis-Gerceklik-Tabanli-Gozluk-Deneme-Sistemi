<?php 
	include 'baglan.php';
	session_start();
 ?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sanal Gerceklik Tabanli Gözlük Deneme<</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a src="http://www.twitter.com"><span class="icon-twitter"></span></a>
					<a href="www.facebook.com"><span class="icon-facebook"></span></a>
					<a href="www.youtube.com"><span class="icon-youtube"></span></a>
					
				</div>
				<?php if(!isset($_SESSION['uye_email'])){ ?>
				<a href="index.php"> <span class="icon-home"></span> Anasayfa</a> 
 				<a href="kayit.php"><span class="icon-edit"></span> Ücretsiz Kayıt </a>
 				<a href="iletisim.php"><span class="icon-envelope"></span> İletişim</a>

 				<?php } else { ?>
 				<a href="index.php"> <span class="icon-home"></span> Anasayfa</a> 
				<a href="sepet.php"><span class="icon-user"></span> Hesabım</a> 				 
				<a href="iletisim.php"><span class="icon-envelope"></span> İletişim</a>
				<?php $uye_id = $_SESSION['uye_id'];
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
		            	$topl = 0;
		            if($sepet_id != 0){
		            	$query1 = "select * from sepet_urun INNER JOIN urun ON sepet_urun.urun_id = urun.urun_id 
		            	where sepet_urun.sepet_id = '$sepet_id' ";
		            	$result1 = mysqli_query($baglan, $query1);
		            	while($row = mysqli_fetch_array($result1))  
                     { 
                     	$topl += $row['adet'] * $row['urun_fiyat'];
                     }	
		            }
		            
		            
            ?>
				<a href="sepet.php"><span class="icon-shopping-cart"></span> Sepetim - <span id="sptTop" class="badge badge-warning"><?php echo $topl;  ?> TL</span></a>
 				
 			<?php } ?>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	
	<div class="span4">
	
	</div>
	
</div>
</header>