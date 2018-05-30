<?php include 'baglan.php';
session_start();

$id = $_POST['del_id'];
$query = "DELETE FROM sepet_urun WHERE id= '$id' ";
if(mysqli_query($baglan, $query)){
	return "true";
}else{
	return "false";
}