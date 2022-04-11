<?php
include('../ayar/baglanti.php');
if(@$_SESSION['giris'] == 'yapildi'){
	$izin = 'ver';
}else{
	include('giris-yap.php');
	die();
}
?>

<html>
<head>
	<meta charset="utf-8">
    
    <title>Yönetim Paneli - Diyetisyen Büşra Pilan</title>
    <link type="text/css" rel="stylesheet" href="css/stil.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="  crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
	<div class="ana_kapsam">
    	<div class="baslik">
    		<h1>Diyetisyen Büşra Pilan Yönetim Paneli</h1>
    	</div>
    	<div class="linkler">
        	<ul>
            	<li><a href="index.php?sayfa=mesajlar">Mesajlar</a></li>
                <li><a href="index.php?sayfa=randevular">Randevular</a></li>
        		<li><a href="index.php?sayfa=anasayfa&tur=sayfa&kimlik=1">Ana Sayfa Yazısı</a></li>
                <li><a href="index.php?sayfa=hakkimizda&tur=sayfa&kimlik=2">Hakkımda Yazısı</a></li>
                <li><a href="index.php?sayfa=diyet&tur=sayfa&kimlik=3">Online Diyet Yazısı</a></li>                
                <li><a href="index.php?sayfa=blog">Blog Yazıları</a></li>
                <li><a href="index.php?sayfa=instagram">İnstagram Galerisi</a></li>
                <li><a href="index.php?sayfa=slayt">Slayt Galerisi</a></li>
                <li><a href="index.php?sayfa=dosyalar">Dosyalar</a></li>
        	</ul>
        </div>
        <div class="icerik">
        	<?php
				$sayfa = @$_GET['sayfa']; 
            	switch($sayfa){
					case "anasayfa":
					include('sayfalar/yazilar.php');
					break;	
					
					case "hakkimizda":
					include('sayfalar/yazilar.php');
					break;	
					
					case "diyet":
					include('sayfalar/yazilar.php');
					break;	
					
					case "instagram":
					include('sayfalar/resimler.php');
					break;	
					
					case "slayt":
					include('sayfalar/resimler.php');
					break;
					
					case "blog":
					include('sayfalar/blog.php');
					break;
					
					case "blog-detay":
					include('sayfalar/blog-detay.php');
					break;
					
					case "dosyalar":
					include('sayfalar/dosyalar.php');
					break;
					
					case "mesajlar":
					include('sayfalar/mesajlar.php'); 
					break;
					case "randevular":
					include('sayfalar/randevular.php'); 
					break;
					
					case "randevu-detay":
					include('sayfalar/randevu-detay.php'); 
					break;
					
					case "mesaj-oku":
					include('sayfalar/mesaj-oku.php'); 
					break;
					
					default:
					include('sayfalar/mesajlar.php'); 
					break;

					
				}
			?>
        </div>
    </div>
</body>
</html>