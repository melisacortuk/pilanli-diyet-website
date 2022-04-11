<?php
$yazi = $db->query('SELECT * FROM yazilar WHERE id=1');
$yazi = $yazi->fetch_assoc();

$slayt = $db->query('SELECT * FROM resimler WHERE tip=1');

?>
<section class="pilanSlider">
             <div class="owl-carousel owl-theme">
                    <?php
                    while($resim = $slayt->fetch_assoc()){
						echo '<div class="item"><img src="images/yuklenen/'.$resim['resim'].'"></div>';
					}
					?>
                  
                </div>
            </section>
            <!-- Features section-->
            
            
            <?php echo $yazi['yazi']?>
            
            
            <?php
            $blog = $db->query('SELECT * FROM yazilar WHERE tip=3 ORDER BY id DESC LIMIT 0,3');
			?>
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Son Makalelerimiz</h2>
                                <p class="lead fw-normal text-muted mb-5">Sizler için özenle yazdığımız makalelerimizi okuyarak sizde diyet ve sağlıklı beslenme hakkında bilgi sahibi olabilirsiniz. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                    <?php
                    while($yazi = $blog->fetch_assoc()){
					echo '
						<div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="images/yuklenen/'.$yazi['resim'].'" alt="..." />
                                <div class="card-body p-4">
                                    
                                    <a class="text-decoration-none link-dark stretched-link" href="index.php?sayfa=blog-oku&kimlik='.$yazi['id'].'"><h5 class="card-title mb-3">'.$yazi['baslik'].'</h5></a>
                                    <p class="card-text mb-0">'.mb_substr($yazi['yazi'], 0, 170, 'UTF-8').'</p>
                                </div>   
                                <a href="index.php?sayfa=blog-oku&kimlik='.$yazi['id'].'" class="btn btn-warning">Devamını Oku</a>                                                           
                            </div>
                        </div>
					';
					}
					?>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    <!-- Call to action-->
                    
                </div>
            </section>
            
            <?php
            	$instagram = $db->query('SELECT * FROM resimler WHERE tip=2');
			?>
            <section class="py-5  bg-body instagram-section">
               <div class="instagram">
  	<div class="insta-baslik"><h1>INSTAGRAMDA BİZİ TAKİP EDİN</h1></div>
    <div class="insta-resim">
    	<div class="ins-owl-carousel">
        <?php
       	while($ins = $instagram->fetch_Assoc()){
			echo '<div class="item"><a href="https://www.instagram.com/diyetisyenpilan/" target="_blank" ><img src="images/yuklenen/'.$ins['resim'].'"></a></div>';
		}
		?>
            
            
   		</div>
    </div>
  </div>
            </section>
            <div class="parallax"></div>
            
            
            
            
            