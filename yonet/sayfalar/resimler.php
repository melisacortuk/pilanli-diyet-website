<?php
if($sayfa == 'slayt'){
?>

<div class="resimler_kapsam">
 	<form action="islemler/resim-islem.php?sayfa=slayt&islem=slayt-ekle" method="post" enctype="multipart/form-data">
    	<h2>Resim Yükle</h2><hr>
    	<table width="100%">
    		<tr>
    			<td>
                	<span>Slayt için Yüklenecek Resmi Seçiniz</span><br>
                    <input type="file" name="resim" style="width: 100%;border: 1px solid #d8d8d8;padding: 5px;"><br>
                    <span>Slayt için yüklenecek resim boyutu 1920X700 olmalı</span>
                </td>
    		</tr>
            <tr>
            	<td align="right"><button style="padding:5px;">Resmi Yükle</button></td>
            </tr>
    	</table>
    </form>
    <h2>Yüklü Resimler</h2><hr> 
    
    <?php
    $resimler = $db->query('SELECT * FROM resimler WHERE tip=1');	
	while($resim = $resimler->fetch_assoc()){
		echo '
			<div class="resim-kapsam">
				<table width="100%">
					<tr>
						<td width="100"><img src="/images/yuklenen/'.$resim['resim'].'" width="100"/></td>
						<td><form action="islemler/resim-islem.php?sayfa=slayt&islem=slayt-guncelle&kimlik='.$resim['id'].'"  method="post" enctype="multipart/form-data"><input type="file" name="resim"><button class="guncelle">Güncelle</button></form></td>
						<td align="center"><span class="resim-sil" kimlik="'.$resim['id'].'">Resmi Sil</span></td>
					</tr>
				</table>
			</div>
		';
	}
	?>
    
</div>
<script>

	$('.resim-sil').click(function(e) {
        if(confirm("Bu resim silinecektir. Onaylıyor musunuz?")){
			var kimlik = $(this).attr('kimlik');
			window.location = "islemler/resim-islem.php?sayfa=slayt&islem=slayt-sil&kimlik="+kimlik;
		}
    });

</script>
<?php
}elseif($sayfa == 'instagram'){
?>

<div class="resimler_kapsam">
 	<form action="islemler/resim-islem.php?sayfa=instagram&islem=instagram-ekle" method="post" enctype="multipart/form-data">
    	<h2>Resim Yükle</h2><hr>
    	<table width="100%">
    		<tr>
    			<td>
                	<span>İnstagram içinYüklenecek Resmi Seçiniz</span><br>
                    <input type="file" name="resim" style="width: 100%;border: 1px solid #d8d8d8;padding: 5px;"><br>                    
                </td>
    		</tr>
            <tr>
            	<td align="right"><button style="padding:5px;">Resmi Yükle</button></td>
            </tr>
    	</table>
    </form>
    <h2>Yüklü Resimler</h2><hr> 
    
    <?php
    $resimler = $db->query('SELECT * FROM resimler WHERE tip=2');	
	while($resim = $resimler->fetch_assoc()){
		echo '
			<div class="resim-kapsam">
				<table width="100%">
					<tr>
						<td width="100"><img src="/images/yuklenen/'.$resim['resim'].'" width="100"/></td>
						<td><form action="islemler/resim-islem.php?sayfa=instagram&islem=instagram-guncelle&kimlik='.$resim['id'].'"  method="post" enctype="multipart/form-data"><input type="file" name="resim"><button class="guncelle">Güncelle</button></form></td>
						<td align="center"><span class="resim-sil" kimlik="'.$resim['id'].'">Resmi Sil</span></td>
					</tr>
				</table>
			</div>
		';
	}
	?>
    
</div>
<script>

	$('.resim-sil').click(function(e) {
        if(confirm("Bu resim silinecektir. Onaylıyor musunuz?")){
			var kimlik = $(this).attr('kimlik');
			window.location = "islemler/resim-islem.php?sayfa=instagram&islem=instagram-sil&kimlik="+kimlik;
		}
    });

</script>
<?php
}
?>