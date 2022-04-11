<?php
include('../../ayar/baglanti.php');
if(@$_SESSION['giris'] != 'yapildi'){
	include('giris-yap.php');
	die();
}

$file = $db->query('SELECT dosya FROM dosyalar WHERE id='.(int)$_GET['kimlik']);
$file = $file->fetch_assoc();					
unlink('/home/pilanlidiyet/public_html/images/yuklenen/'.$file['dosya']);
$db->query('DELETE FROM dosyalar WHERE id='.(int)$_GET['kimlik']);
echo '<script>window.location ="//pilanlidiyet.com/yonet/index.php?sayfa=dosyalar"</script>';
?>

