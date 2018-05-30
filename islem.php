	<?php
	include 'baglan.php';
session_start();

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
                    header("Location: ../shop-cart/index.php");
                    $sorgula=mysqli_query($baglan,"select * from uyekaydi where uye_email='$uye_email' and  uye_sifre='$uye_sifre'");

					$verisay=mysqli_fetch_row($sorgula);
					//die($verisay[1]);
					if ($verisay) {

						$_SESSION['uye_email'] = $uye_email;
						$_SESSION['uye_adi'] = $verisay[1];
						$_SESSION['uye_soyadi'] = $verisay[2];
						$_SESSION['uye_id'] = $verisay[0];
						header("Location: ../shop-cart/index.php");
						
					}

                }else{

                    header("Location: ../shop-cart/kayit.php?kayit=no");	
					
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
			//die($verisay[1]);
			if ($verisay) {

				$_SESSION['uye_email'] = $uye_email;
				$_SESSION['uye_adi'] = $verisay[1];
				$_SESSION['uye_soyadi'] = $verisay[2];
				$_SESSION['uye_id'] = $verisay[0];
				header("Location: ../shop-cart/index.php");
				
			}
			else{
				header("Location: ../shop-cart/index.php?login=no");
			}	
		}
	}

}




if(isset($_POST["sepetekle"])){

	$urun_id=$_POST["urun_id"];
	//$sepet_id = $_POST['sepet_id'];
	$uye_id = $_SESSION['uye_id'];
	//adet al
	//$sorgula=mysqli_query($baglan,"select * from urun");
	$query ="select * from sepet where uye_id = '$uye_id' and tamamlandi = 0" ;  
    $result = mysqli_query($baglan, $query);  
	if(mysqli_num_rows($result) > 0)  {
		// sepeti var
    		$degerler = mysqli_fetch_array($result);
    		$sepet_id = $degerler['id'];

    		$urun_ekle = "insert into sepet_urun (sepet_id, urun_id, adet) values ('$sepet_id' , '$urun_id' , 1)";
    		if(mysqli_query($baglan,$urun_ekle)){
    			header("Location: sepet.php");
    		}
	}else {
		// sepet oluştur
		
		$query1 = "insert into sepet (uye_id, tamamlandi) values('$uye_id' , 0)";
		$ekle = mysqli_query($baglan, $query1);
		if($ekle){
			$query ="select * from sepet where uye_id = '$uye_id' and tamamlandi = 0" ;  
    		$result = mysqli_query($baglan, $query);
    		$degerler = mysqli_fetch_array($result);
    		$sepet_id = $degerler['id'];

    		$urun_ekle = "insert into sepet_urun (sepet_id, urun_id, adet) values ('$sepet_id' , '$urun_id' , 1)";
    		if(mysqli_query($baglan,$urun_ekle)){
    			header("Location: sepet.php");
    		}
		}


	}

	/*if(msqli_num_rows($sorgula)>0){
		while ($row = msqli_fetch_array($sorgula)) {
			echo "string";


	}
}*/
	}

			
?>