<?php 
	include 'baglan.php';
 ?>
 <?php 

  include 'nedmin/netting/baglan.php';
 $ayarsor=mysqli_query($baglan,"select * from ayarlar");
  // $menucek=mysqli_fetch_assoc($menusorgu);
$ayarcek=mysqli_fetch_assoc($ayarsor);

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $ayarcek['ayar_title']; ?></title>

    
	<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
    <meta name="author" content="Seren KAYA">
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="style.css" rel="stylesheet"/>
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					
					<a href="<?php echo $ayarcek['ayar_twitter']; ?>"><span class="icon-twitter"></span></a>
					<a href="<?php echo $ayarcek['ayar_facebook']; ?>"><span class="icon-facebook"></span></a>
					<a href="<?php echo $ayarcek['ayar_youtube']; ?>"><span class="icon-youtube"></span></a>
				</div>
					<?php 
	              		$menusorgu=mysqli_query($baglan,"select * from menuler");
	             		// $menucek=mysqli_fetch_assoc($menusorgu);
	              		while($menucek=mysqli_fetch_assoc($menusorgu)){
	             		?>
	           		 <a class="active" href="<?php echo $menucek['tablo_menuurl']; ?>"><?php echo $menucek['tablo_menuad']; ?></a>

	          		<?php } ?>				

			</div>
		</div>
	</div>
</div>

<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>

	<a class="logo" href="index.php"><span>Twitter Bootstrap ecommerce template</span> 
		<img src="assets/img/l2.gif" alt="bootstrap sexy shop" width="90px" height="90px"> 
	</a>

	</h1>
	</div>
	<div class="span4">
	
	</div>
	
</div>
</header>

