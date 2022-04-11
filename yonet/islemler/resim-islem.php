<?php
include('../../ayar/baglanti.php');
if(@$_SESSION['giris'] != 'yapildi'){
	include('giris-yap.php');
	die();
}

//die(print_r( $_GET));
$sayfa = @$_GET['sayfa'];

if($sayfa == "slayt"){
	
	$islem = @$_GET['islem'];
	if($islem == "slayt-ekle"){	
						
						$target_dir = "/home/pilanlidiyet/public_html/images/yuklenen/";
						$target_file = $target_dir . basename($_FILES["resim"]["name"]);
						
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						
						
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["resim"]["tmp_name"]);
						  if($check !== false) {
							
							$uploadOk = 1;
						  } else {
							die("Lütfen Resim Dosyası Yükleyin. <a href='javascript:history.back(1);'>Geri Git</a>");
							$uploadOk = 0;
						  }
						}
						
						
						if (file_exists($target_file)) {
						  die(htmlspecialchars( basename( $_FILES["resim"]["name"])).". Bu isimde bir dosya zaten mevcut. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($_FILES["resim"]["size"] > 2097152) {
						  die("Resim dosyası 2MB'den büyük olamaz. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {						  
						  die("Lütfen yanlızca JPG, JPEG, PNG & GIF uzantılı dosya yükleyiniz . <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($uploadOk == 0) {
						  echo "Resim Yüklenemedi.";
						
						} else {
						  if (move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
							$db->query('INSERT INTO resimler (resim, tip) VALUES("'.$_FILES["resim"]["name"].'",1)');
							die( htmlspecialchars( basename( $_FILES["resim"]["name"]))." isimli dosya başarıyla yüklendi . <a href='javascript:history.back(1);'>Geri Git</a>");
						  } 
						}
					}
	}
	$islem = @$_GET['islem'];
	if($islem == "slayt-guncelle"){
						$target_dir = "/home/pilanlidiyet/public_html/images/yuklenen/";
						$target_file = $target_dir . basename($_FILES["resim"]["name"]);
						
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						
						
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["resim"]["tmp_name"]);
						  if($check !== false) {
							
							$uploadOk = 1;
						  } else {
							die("Lütfen Resim Dosyası Yükleyin. <a href='javascript:history.back(1);'>Geri Git</a>");
							$uploadOk = 0;
						  }
						}
						
						
						if (file_exists($target_file)) {
						  die(htmlspecialchars( basename( $_FILES["resim"]["name"])).". Bu isimde bir dosya zaten mevcut. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($_FILES["resim"]["size"] > 2097152) {
						  die("Resim dosyası 2MB'den büyük olamaz. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {						  
						  die("Lütfen yanlızca JPG, JPEG, PNG & GIF uzantılı dosya yükleyiniz . <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($uploadOk == 0) {
						  echo "Resim Yüklenemedi.";
						
						} else {
						  if (move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
							$db->query('UPDATE resimler SET resim="'.$_FILES["resim"]["name"].'" WHERE id='.(int)$_GET['kimlik']);
							die( htmlspecialchars( basename( $_FILES["resim"]["name"]))." isimli dosya başarıyla yüklendi . <a href='javascript:history.back(1);'>Geri Git</a>");
						  } 
						}		
	}
	$islem = @$_GET['islem'];
	if($islem == "slayt-sil"){
		
					$resim = $db->query('SELECT resim FROM resimler WHERE id='.(int)$_GET['kimlik']);
					$resim = $resim->fetch_assoc();
					unlink("/home/pilanlidiyet/public_html/images/yuklenen/".$resim['resim']);
					$db->query('DELETE FROM resimler WHERE id='.(int)$_GET['kimlik']);
					die("Resim başarıyla silindi. <a href='javascript:history.back(1);'>Geri Git</a>");
	}
  
  
  
  
  
  
  
  
  
  
  
elseif($sayfa == "instagram"){
	 
	$islem = @$_GET['islem'];
	if($islem == "instagram-ekle"){	
						
						$target_dir = "/home/pilanlidiyet/public_html/images/yuklenen/";
						$target_file = $target_dir . basename($_FILES["resim"]["name"]);
						
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						
						
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["resim"]["tmp_name"]);
						  if($check !== false) {
							
							$uploadOk = 1;
						  } else {
							die("Lütfen Resim Dosyası Yükleyin. <a href='javascript:history.back(1);'>Geri Git</a>");
							$uploadOk = 0;
						  }
						}
						
						
						if (file_exists($target_file)) {
						  die(htmlspecialchars( basename( $_FILES["resim"]["name"])).". Bu isimde bir dosya zaten mevcut. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($_FILES["resim"]["size"] > 2097152) {
						  die("Resim dosyası 2MB'den büyük olamaz. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {						  
						  die("Lütfen yanlızca JPG, JPEG, PNG & GIF uzantılı dosya yükleyiniz . <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($uploadOk == 0) {
						  echo "Resim Yüklenemedi.";
						
						} else {
						  if (move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
							$db->query('INSERT INTO resimler (resim, tip) VALUES("'.$_FILES["resim"]["name"].'",2)');
							die( htmlspecialchars( basename( $_FILES["resim"]["name"]))." isimli dosya başarıyla yüklendi . <a href='javascript:history.back(1);'>Geri Git</a>");
						  } 
						}
					}
	}
	if($islem == "instagram-guncelle"){
						$target_dir = "/home/pilanlidiyet/public_html/images/yuklenen/";
						$target_file = $target_dir . basename($_FILES["resim"]["name"]);
						
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						
						
						if(isset($_POST["submit"])) {
						  $check = getimagesize($_FILES["resim"]["tmp_name"]);
						  if($check !== false) {
							
							$uploadOk = 1;
						  } else {
							die("Lütfen Resim Dosyası Yükleyin. <a href='javascript:history.back(1);'>Geri Git</a>");
							$uploadOk = 0;
						  }
						}
						
						
						if (file_exists($target_file)) {
						  die(htmlspecialchars( basename( $_FILES["resim"]["name"])).". Bu isimde bir dosya zaten mevcut. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($_FILES["resim"]["size"] > 2097152) {
						  die("Resim dosyası 2MB'den büyük olamaz. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
						&& $imageFileType != "gif" ) {						  
						  die("Lütfen yanlızca JPG, JPEG, PNG & GIF uzantılı dosya yükleyiniz . <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($uploadOk == 0) {
						  echo "Resim Yüklenemedi.";
						
						} else {
						  if (move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
							$db->query('UPDATE resimler SET resim="'.$_FILES["resim"]["name"].'" WHERE id='.(int)$_GET['kimlik']);
							die( htmlspecialchars( basename( $_FILES["resim"]["name"]))." isimli dosya başarıyla yüklendi . <a href='javascript:history.back(1);'>Geri Git</a>");
						  } 
						}		
	}
	if($islem == "instagram-sil"){
		
					$resim = $db->query('SELECT resim FROM resimler WHERE id='.(int)$_GET['kimlik']);
					$resim = $resim->fetch_assoc();
					unlink("/home/pilanlidiyet/public_html/images/yuklenen/".$resim['resim']);
					$db->query('DELETE FROM resimler WHERE id='.(int)$_GET['kimlik']);
					die("Resim başarıyla silindi. <a href='javascript:history.back(1);'>Geri Git</a>");
	}
?>

