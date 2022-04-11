<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('ayar/baglanti.php');
//print_r($_POST);die();
$adi = addslashes($_POST['adi']);
$email = addslashes($_POST['eposta']);
$telefon= addslashes($_POST['tel']);
$cinsiyet = addslashes($_POST['cinsiyet']);
$boy = addslashes($_POST['boy']);
$kilo = addslashes($_POST['kilo']);
$yas = addslashes($_POST['yas']);
$randevu = explode('T',addslashes($_POST['randevu-tarih']));
$randevu_tarih = explode('-',addslashes($randevu[0]));
$randevu_tarih = $randevu_tarih[2].'-'.$randevu_tarih[1].'-'.$randevu_tarih[0].' Saat:'.$randevu[1];
$bilgiler = addslashes($_POST['bilgiler']);
$durum = 0;
$tarih = date('d-m-Y', time());
$db->query(
'INSERT INTO rezervasyonlar
(adi, email, telefon, cinsiyet, boy, kilo, yas, bilgiler, durum, tarih, randevu_tarih) VALUES(
"'.$adi.'",
"'.$email.'",
"'.$telefon.'",
"'.$cinsiyet.'",
"'.$boy.'",
"'.$kilo.'",
"'.$yas.'",
"'.$bilgiler.'",
"'.$durum.'",
"'.$tarih.'",
"'.$randevu_tarih.'"
)
' 
);


?>
<script>alert('Randevunuz Başarıyla Oluşturuldu.');window.location = "http://pilanlidiyet.com/index.php?sayfa=randevu-al";</script>