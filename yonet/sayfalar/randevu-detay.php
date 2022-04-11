<?php
$kimlik = (int)$_GET['kimlik'];
$mesajlar = $db->query('SELECT * FROM rezervasyonlar WHERE id='.$kimlik);
$mesaj = $mesajlar->fetch_assoc();
 $db->query('UPDATE rezervasyonlar SET durum=1 WHERE id='.$kimlik)
?>
<div>
<h1>Randevu Detayı</h1>
<hr>
<table width="100%" class="mesaj-oku-table">
	<tr>
		<td class="oku-baslik">Adı Soyadı</td>
		<td class="oku-yazi"><?php echo $mesaj['adi'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Randevu Tarihi</td>
		<td class="oku-yazi"><?php echo $mesaj['randevu_tarih'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Telefon</td>
		<td class="oku-yazi"><?php echo $mesaj['telefon'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">E-Posta</td>
		<td class="oku-yazi"><?php echo $mesaj['email'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Cinsiyet</td>
		<td class="oku-yazi"><?php echo $mesaj['cinsiyet'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Boy</td>
		<td class="oku-yazi"><?php echo $mesaj['boy'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Kilo</td>
		<td class="oku-yazi"><?php echo $mesaj['kilo'];?></td>
	</tr>
    
    <tr>
		<td class="oku-baslik">Yaş</td>
		<td class="oku-yazi"><?php echo $mesaj['yas'];?></td>
	</tr>
    
        
    <tr>
		<td class="oku-baslik">İşlem Tarihi</td>
		<td class="oku-yazi"><?php echo $mesaj['tarih'];?></td>
	</tr>
    
    
    
    <tr>
		<td class="oku-baslik">Bilgiler</td>
		<td class="oku-yazi"><?php echo $mesaj['bilgiler'];?></td>
	</tr>
</table>
</div>
<div>
	<div><a href="islemler/randevu-sil.php?kimlik=<?php echo $mesaj['id'];?>" class="mesaji-sil" onClick="return false">Sil</a></div>
	<div><a href="http://pilanlidiyet.com/yonet/index.php?sayfa=randevular" class="geri-git">Geri Git</a></div>
    
</div>

<script>
$('.mesaji-sil').click(function(e) {
    if(confirm('Bu mesajı silmek istediğinizden emin misiniz?')){
		window.location=$(this).attr('href');
	}
});
</script> 