<?php
$kimlik = (int)$_GET['kimlik'];
$mesajlar = $db->query('SELECT * FROM mesajlar WHERE id='.$kimlik);
$mesaj = $mesajlar->fetch_assoc();
 $db->query('UPDATE mesajlar SET durum=1 WHERE id='.$kimlik)
?>
<div>
<h1><?php echo $mesaj['konu'];?></h1>
<hr>
<table width="100%" class="mesaj-oku-table">
	<tr>
		<td class="oku-baslik">Gönderen</td>
		<td class="oku-yazi"><?php echo $mesaj['adi'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Konu</td>
		<td class="oku-yazi"><?php echo $mesaj['konu'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">E-Posta</td>
		<td class="oku-yazi"><?php echo $mesaj['email'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Telefon</td>
		<td class="oku-yazi"><?php echo $mesaj['telefon'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Tarih</td>
		<td class="oku-yazi"><?php echo $mesaj['tarih'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Mesaj</td>
		<td class="oku-yazi"><?php echo $mesaj['mesaj'];?></td>
	</tr>
</table>
</div>
<div>
	<div><a href="islemler/mesaj-sil.php?kimlik=<?php echo $mesaj['id'];?>" class="mesaji-sil" onClick="return false">Sil</a></div>
	<div><a href="http://pilanlidiyet.com/yonet/index.php?sayfa=mesajlar" class="geri-git">Geri Git</a></div>
    
</div>

<script>
$('.mesaji-sil').click(function(e) {
    if(confirm('Bu mesajı silmek istediğinizden emin misiniz?')){
		window.location=$(this).attr('href');
	}
});
</script> 