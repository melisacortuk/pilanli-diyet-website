<?php
$blog = $db->query('SELECT * FROM yazilar WHERE tip=3 ORDER BY id');
?>
<div>
	<h1>BLOG EKLE/DÜZENLE</h1>
    <div class="yeni-yazi-ekle">
    	<a href="index.php?sayfa=blog-detay">YENİ YAZI EKLE</a>
    </div>
    
    <div class="blog-yazilar">
    <div class="blog-yazi">
						<table width="100%">
    	<?php
        	while($yazi = $blog->fetch_assoc()){
				echo '
					
							<tr>
								<td><img src="/images/yuklenen/'.$yazi['resim'].'" alt="" width="200"></td>
								<td><h3>'.$yazi['baslik'].'</h3><br><span>'.mb_substr($yazi['yazi'],0,125,"UTF-8").'...</span></td>
								<td><a href="index.php?sayfa=blog-detay&kimlik='.$yazi['id'].'" class="blog-guncelle">Düzenle</a></td> 
								<td><a href="islemler/blog-yazi-sil.php?kimlik='.$yazi['id'].'" class="blog-sil" onClick="return false">Sil</a></td>
							</tr>
						
				';
			}
		?>
        </table>
					</div>
    </div>
</div>

<script>
	$('.blog-sil').click(function(e) {
        if(confirm('Bu makaleyi silmek istediğinizden emin misiniz?')){
			window.location = $(this).attr('href');
		}
    });
</script>