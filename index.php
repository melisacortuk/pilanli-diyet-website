<?php 
include('ayar/baglanti.php');
$sayfa = $db->real_escape_string(@$_GET['sayfa']);
?>

<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title class="title">Pilanlı Diyet| Büşra Pilan</title>                     
        <link rel="shortcut icon" href="http://pilanlidiyet.com/favicon.png" type="image/x-icon" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css" integrity="sha512-X/RSQYxFb/tvuz6aNRTfKXDnQzmnzoawgEQ4X8nZNftzs8KFFH23p/BA6D2k0QCM4R0sY1DEy9MIY9b3fwi+bg==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css" integrity="sha512-f28cvdA4Bq3dC9X9wNmSx21rjWI+5piIW/uoc2LuQ67asKxfQjUow2MkcCNcfJiaLrHcGbed1wzYe3dlY4w9gA==" crossorigin="anonymous" />
        <link href="css/styles.css" rel="stylesheet" />
        <style>
		
		.navbar-nav{
			margin-bottom:15px;
		}
       table.yazi-1 {
    padding: 60px 0px 0 0;
    width: 1100px;
    margin: auto;
    color: #d2ab66;
    font-size: 14px;
}
	   .yazi-1 .icerik {
			line-height: 20px;
			margin-left: 15px;
		}
		
		.owl-carousel {
    display: none;
    position: relative;
    width: 100%;
    -ms-touch-action: pan-y;
    background: #061a25;
}

.active {
    background-color: #d2ab66;
    border-radius: 10px;
}

table.sistem-yazisi ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.instagram-section .owl-controls, .instagram-section .owl-pagination, .instagram-section .owl-theme{
	background:white!important;
}

.insta-baslik {
    text-align: center;
    margin-bottom: 40px;
}


.parallax {
  /* The image used */
  background-image: url("http://pilanlidiyet.com/images/arkaplan-2.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


		
        </style>
        <base href="http://pilanlidiyet.com/">
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <div class="logo_pilan"><img src="images/logo_m.png" alt=""></div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            	
                <div class="container px-5">                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/">Ana Sayfa</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?sayfa=hakkimda">Hakkımda</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?sayfa=online-diyet">Online Diyet</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?sayfa=randevu-al">Ön Randevu Al</a></li>
                            <li class="nav-item"><a class="nav-link" href="index.php?sayfa=blog">Blog</a></li>                            
                            <li class="nav-item">
                                <a class="nav-link" id="navbarDropdownPortfolio" href="index.php?sayfa=iletisim" role="button" aria-expanded="false">İletişim</a>                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
        	<?php
            	if($sayfa == "anasayfa"){
					include('sayfalar/anasayfa.php');
				}else if($sayfa == "hakkimda"){
					include('sayfalar/hakkimda.php');
				}else if($sayfa == "online-diyet"){
					include('sayfalar/online-diyet.php');
				}else if($sayfa == "iletisim"){ 
					include('sayfalar/iletisim.php');
				}else if($sayfa == "randevu-al"){ 
					include('sayfalar/randevu-al.php');
				}else if($sayfa == "blog"){ 
					include('sayfalar/blog.php');
				}else if($sayfa == "blog-oku"){ 
					include('sayfalar/blog-oku.php');
				}else{
					include('sayfalar/anasayfa.php');
				}
			?>
            <div class="whatsapp">
            	<a href="https://api.whatsapp.com/send?phone=905345786391" target="_blank"><img src="images/whatsapp.png" alt="" width="100%"></a>
            </div>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-pilanli">Pilanlı Diyet &copy;  2021</div></div>
                    <div class="col-auto">
                     	<a class="link-light text-pilanli small" href="#!">Ana Sayfa</a>
                        <span class="text-white mx-1">&middot;</span>
                         <a class="link-light text-pilanli small" href="#!">Hakkımda</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light text-pilanli small" href="#!">Online Diyet</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light text-pilanli small" href="#!">Randevu Al</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light text-pilanli small" href="#!">Blog</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light text-pilanli small" href="#!">İletişim</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
         <script>
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		 autoWidth:true,
    	items:1,
		autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
	})
	
	$('.ins-owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		 autoWidth:true,
    	items:6,
		autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true
	})
	
	
</script>
    </body>
</html>
