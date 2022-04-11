<?php
$mesajlar = $db->query('SELECT * FROM rezervasyonlar ORDER BY id DESC');
?>
<div>
<h1>Mesajlar</h1>
<hr>
<table width="100%" class="mesaj-table">
	<tr>
		<th>Adı Soyadı</th>
        <th>E-Mail</th>
        <th>Telefon</th>
        <th>Randevu Tarihi</th>
        <th>İşlem Tarihi</th>
        <th>Detaylar</th>
	</tr>
<?php
while($mesaj = $mesajlar->fetch_Assoc()){
echo '
	<tr>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['adi'].'</td>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['email'].'</td>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['telefon'].'</td>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['randevu_tarih'].'</td>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['tarih'].'</td>
		<td><a href="http://pilanlidiyet.com/yonet/index.php?sayfa=randevu-detay&kimlik='.$mesaj['id'].'">Detaylar</a></td>
	</tr>
';
}
?>
</table>
</div>