<section class="beyaz-bg">
<?php
$blog = $db->query('SELECT * FROM yazilar WHERE tip=3 ORDER BY id');
?>
<div class="container px-5 py-5">
	<div class="row">
    	<div class="col-md-12">
        	<h1>BLOG</h1>
			<hr>
        	<table>
            <?php
            while($yazi = $blog->fetch_assoc()){
				echo '
				<tr class="blog-tr">
                	<td>
                    	<img src="http://pilanlidiyet.com/images/yuklenen/'.$yazi['resim'].'" alt="" class="blog-resim">
                    </td>
                    <td>
                    	<div>
                        	<p class="blog-baslik"><a href="https://pilanlidiyet.com/index.php?sayfa=blog-oku&kimlik='.$yazi['id'].'">'.$yazi['baslik'].'</a></p>
                            <p class="blog-metin">'.mb_substr(strip_tags($yazi['yazi']), 0,125,'UTF-8').'...</p>							
							<p class="blog-link"><a href="https://pilanlidiyet.com/index.php?sayfa=blog-oku&kimlik='.$yazi['id'].'">Devamını Oku</a></p>
                            <p class="blog-tarih"><i>12/06/2021</i></p>
                        </div>
                    </td>
                </tr>
				';
			}
			?>              
        	</table>
        </div>
    </div>
</div>
</section>