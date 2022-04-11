<?php

$_POST['kullanici'] = addslashes($_POST['kullanici']);
$_POST['sifre'] = addslashes($_POST['sifre']);
//print_r($_POST);die();
$kullanici = '';
$sifre = '';
include('../ayar/baglanti.php');




if($kullanici == $_POST['kullanici'] && $sifre == $_POST['sifre']){
	$_SESSION['giris'] = 'yapildi';
	echo '<script>window.location = "index.php";</script>';
}else{
	echo '<script>window.location = "giris-yap.php?hata=hatali-islem";</script>';
}
?>