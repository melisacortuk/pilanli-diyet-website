<?php
include('../../ayar/baglanti.php');

$kimlik = (int)$_GET['kimlik'];
$db->query('DELETE FROM mesajlar WHERE id='.$kimlik);
echo '<script>window.location="http://pilanlidiyet.com/yonet/index.php?sayfa=mesajlar";</script>'; 
?>

