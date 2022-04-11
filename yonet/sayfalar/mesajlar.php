<?php
$mesajlar = $db->query('SELECT * FROM mesajlar ORDER BY id DESC');
?> 
<div>
<h1>Mesajlar</h1>
<hr>
<table width="100%" class="mesaj-table">
	<tr>
		<th>Gönderen</th>
        <th>Konu</th>
        <th>E-Posta</th>
        <th>Tarih</th>
        <th>Detay</th>
	</tr>
<?php
while($mesaj = $mesajlar->fetch_Assoc()){
echo '
	<tr>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['adi'].'</td>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['konu'].'</td>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['email'].'</td>
		<td class="durum-'.$mesaj['durum'].'">'.$mesaj['tarih'].'</td>
		<td><a href="http://pilanlidiyet.com/yonet/index.php?sayfa=mesaj-oku&kimlik='.$mesaj['id'].'">Oku</a></td>
	</tr>
';
}
?>
</table>
</div>