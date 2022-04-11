<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('ayar/baglanti.php');
/*Array ( [adi] => Mustafa SARIAY [eposta] => asd@asd.asd [tel] => 05555555555 [konu] => Mesajın Konusu [mesaj] => Mesajın metni )*/

$adi = addslashes($_POST['adi']);
$email = addslashes($_POST['eposta']);
$telefon= addslashes($_POST['tel']);
$konu = addslashes($_POST['konu']);
$mesaj = addslashes($_POST['mesaj']);
//echo 'INSERT INTO mesajlar (konu,adi,email,telefon,mesaj,tarih,durum) VALUES ("'.$konu.'","'.$adi.'","'.$email.'","'.$telefon.'","'.$mesaj.'","'.date('d/m/Y', time()).'","0")';
$db->query('INSERT INTO mesajlar (konu,adi,email,telefon,mesaj,tarih,durum) VALUES ("'.$konu.'","'.$adi.'","'.$email.'","'.$telefon.'","'.$mesaj.'","'.date('d/m/Y', time()).'","0")');
die();
?> 
<script>alert('Mesajınızı aldık. Bizimle iletişime geçtiğiniz için teşekkür ederiz.');window.location = "http://pilanlidiyet.com/index.php?sayfa=iletisim";</script>