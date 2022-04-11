<section class="beyaz-bg">
<?php
$kimlik = (int)$_GET['kimlik'];

$blog = $db->query('SELECT * FROM yazilar WHERE id='.$kimlik.' AND tip=3 ORDER BY id');
$blog = $blog->fetch_assoc();
?>
<div class="container px-5 py-5">
	<div class="row">
    	<div class="col-md-12">
        	<h1><?php echo $blog['baslik']?></h1>
			<hr>
            <img src="images/yuklenen/<?php echo $blog['resim']?>" alt="" width="100%">
            <p>Tarih : <?php echo $blog['tarih']?></p>
        	<div>
            	<?php echo $blog['yazi']?>
            </div>
        </div>
    </div>
</div>
</section>

<section>
<?php
$blog = $db->query('SELECT * FROM yazilar WHERE tip=3 ORDER BY id');
?>
<div class="container px-5 py-5">
	<div class="row">
    	<div class="col-md-12">
        	<h1 class="pilanli-diyet">Son Blog Yazıları</h1>
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
                        	<p class="blog-baslik pilanli-diyet"><a href="https://pilanlidiyet.com/index.php?sayfa=blog-oku&kimlik='.$yazi['id'].'" class="pilanli-diyet">'.$yazi['baslik'].'</a></p>
                            <p class="blog-metin pilanli-diyet">'.mb_substr(strip_tags($yazi['yazi']), 0,125,'UTF-8').'...</p>							
							<p class="blog-link pilanli-diyet"><a href="https://pilanlidiyet.com/index.php?sayfa=blog-oku&kimlik='.$yazi['id'].'"><strong>Devamını Oku</strong></a></p>
                            <p class="blog-tarih pilanli-diyet"><i>12/06/2021</i></p>
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