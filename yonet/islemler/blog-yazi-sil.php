<?php
include('../../ayar/baglanti.php');
if(@$_SESSION['giris'] != 'yapildi'){
	include('giris-yap.php');
	die();
}
$kimlik = (int)$_GET['kimlik'];
$resim = $db->query('SELECT resim FROM yazilar WHERE id='.$kimlik.' AND tip=3');
$resim = $resim->fetch_assoc();
unlink("/home/pilanlidiyet/public_html/images/yuklenen/".$resim['resim']);
$db->query('DELETE FROM yazilar WHERE id='.$kimlik.' AND tip=3');
echo '<script>window.location="http://pilanlidiyet.com/yonet/index.php?sayfa=blog";</script>'; 
?>

