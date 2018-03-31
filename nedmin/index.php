<?php 
include 'header.php'; 
include 'sidebar.php'; 
session_start();

if(!isset($_SESSION['admin_kadi'])){
    header('Location:login.php');
}
?>
	<!-- index göbek kısmı-->
 <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">BİTİRME ÖDEVİ PANELİNE HOŞGELDİNİZ.</h1>
                        <h1 class="page-subhead-line">Sitenizi yönetmek için sol tarafta yer alan menüleri kulanabilirsiniz. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
            

            </div>
            <!-- /. PAGE INNER  -->
        </div>

<?php include 'footer.php'; ?>