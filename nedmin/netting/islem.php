<?php
	include 'baglan.php';


	session_start();

	if(isset($_POST['ayarkaydet'])){

		
		$id=0;
		$ayarkaydet="update ayarlar set ayar_title='" .$_POST['ayar_title']."', ayar_description='" .$_POST['ayar_description']."', ayar_keywords='" .$_POST['ayar_keywords']."', ayar_telefon='" .$_POST['ayar_telefon']."', ayar_facebook='" .$_POST['ayar_facebook']."', ayar_twitter='" .$_POST['ayar_twitter']."', ayar_footer='" .$_POST['ayar_footer']."', ayar_adres='" .$_POST['ayar_adres']."', ayar_mail='" .$_POST['ayar_mail']."', ayar_faks='" .$_POST['ayar_faks']."' where ayar_id= '$id'";

		if(mysqli_query($baglan, $ayarkaydet))
		{

			header("Location:../ayarlar.php?durum=ok");
		}
		else 
		{
			header("Location:../ayarlar.php?durum=no");
		}

	} 

		//login admin girişi
	if(isset($_POST['loggin'])){

		$admin_kadi=$_POST['admin_kadi'];
		$admin_sifre=$_POST['admin_sifre'];

		if ($admin_kadi && $admin_sifre) {
			
			$sorgula=mysqli_query($baglan,"select * from admin where admin_kadi='$admin_kadi' and  admin_sifre='$admin_sifre'");

			$verisay=mysqli_fetch_row($sorgula);
			if ($verisay) {

				$_SESSION['admin_kadi'] = $admin_kadi;
				header("Location: ../index.php");
				
			}
			else{
				header('Location:../login.php?login=no');
			}	
		}

	}


	
	
?>
