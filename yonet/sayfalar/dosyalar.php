<div class="resimler_kapsam">
 	<form action="islemler/dosya-islem.php" method="post" enctype="multipart/form-data">
    	<h2>Dosya Yükle</h2><hr>
    	<table width="100%">
    		<tr>
    			<td>
                	<span>Yüklenecek Dosyayı Seçiniz</span><br>
                    <input type="file" name="resim" style="width: 100%;border: 1px solid #d8d8d8;padding: 5px;"><br>
                    <span>Yanlızca resim, word, excel ve pdf dökümanları yüklenebilir.</span>
                </td>
    		</tr>
            <tr>
            	<td align="right"><button style="padding:5px;">Dosya Yükle</button></td>
            </tr>
    	</table>
    </form>
    <h2>Yüklü Dosyalar</h2><hr> 
    
    <?php
    $resimler = $db->query('SELECT * FROM dosyalar ORDER BY id desc');	
	while($resim = $resimler->fetch_assoc()){
		echo '
			<div class="resim-kapsam">
				<table width="100%">
					<tr>						
						<td><input type="text" value="//pilanlidiyet.com/images/yuklenen/'.$resim['dosya'].'" style="width:100%"/></td>
						<td align="center"><span class="resim-sil" kimlik="'.$resim['id'].'">Dosyayı Sil</span></td>
					</tr>
				</table>
			</div>
		';
	}
	?>
    
</div>
<script>

	$('.resim-sil').click(function(e) {
        if(confirm("Bu dosya silinecektir. Onaylıyor musunuz?")){
			var kimlik = $(this).attr('kimlik');
			window.location = "islemler/dosya-sil.php?kimlik="+kimlik;
		}
    });

</script>