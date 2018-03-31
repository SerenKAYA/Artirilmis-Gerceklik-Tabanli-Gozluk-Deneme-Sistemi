	<?php
	include 'baglan.php';


if(isset($_POST['uyekayit'])){
		$uye_adi=$_POST["uye_adi"];
		$uye_soyadi=$_POST["uye_soyadi"];
		$uye_sifre=$_POST["uye_sifre"];
		$uye_email=$_POST["uye_email"];
		$uye_cinsiyet=$_POST["uye_cinsiyet"];


		if($uye_sifre==""|| $uye_adi=="" || $uye_soyadi=="" || $uye_email=="" || $uye_cinsiyet==""){
			echo("<center><b>Boş Bıraktığınız Alanlar Var. Lütfen Geri Dönüp Doldurunuz.</b></center>");
			
		}else{
			
			$ekle=mysqli_query($baglan , "INSERT INTO uyekaydi (uye_adi , uye_soyadi , uye_cinsiyet , uye_email , uye_sifre ) VALUES ('$uye_adi' , '$uye_soyadi' ,  '$uye_cinsiyet'  ,'$uye_email' ,  '$uye_sifre')");

				if($ekle) {
                    echo "Kaydınız başarı ile yapıldı<a href=\"index.php\"> tıklayınız</a>..";

                }else{

                    echo "Kaydınız yapılamadı";		
					
				}
			}

}




if(isset($_POST["oturum"])){
	$uye_email=$_POST['uye_email'];
	$uye_sifre=$_POST['uye_sifre'];

	if($uye_sifre=="" || $uye_email=="" ){
			echo("<center><b>Boş Bıraktığınız Alanlar Var. Lütfen Geri Dönüp Doldurunuz.</b></center>");			
		}else{
			
		if ($uye_email && $uye_sifre) {
			
			$sorgula=mysqli_query($baglan,"select * from uyekaydi where uye_email='$uye_email' and  uye_sifre='$uye_sifre'");

			$verisay=mysqli_fetch_row($sorgula);
			if ($verisay) {

				$_SESSION['uye_email'] = $uye_email;
				header("Location: ../shop-cart/index.php");
				
			}
			else{
				echo "Yanlış Giriş Yaptınız!";
			}	
		}
	}

}
			
?>