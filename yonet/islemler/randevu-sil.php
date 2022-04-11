<?php
include('../../ayar/baglanti.php');

$kimlik = (int)$_GET['kimlik'];
$db->query('DELETE FROM rezervasyonlar WHERE id='.$kimlik);
echo '<script>window.location="http://pilanlidiyet.com/yonet/index.php?sayfa=randevular";</script>'; 
?>

