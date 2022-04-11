<?php
include('../../ayar/baglanti.php');
if(@$_SESSION['giris'] != 'yapildi'){
	include('giris-yap.php');
	die();
}

$kimlik = (int)@$_GET['kimlik'];
$baslik = addslashes($_POST['baslik']);
$yazi = addslashes($_POST['yazi']);

/*
$resim_adi = '';
if(@$_FILES['resim']['name'] != ''){
	$yol = "../../images/yuklenen/".basename( $_FILES['resim']['name']);
	if(move_uploaded_file($_FILES['resim']['tmp_name'], $yol)) {
		$resim_adi =  basename( $_FILES['resim']['name']);
	} else{
		$resim_adi = 'resim-yuklenemedi';
	}
}
*/
if($kimlik == 0){

}elseif($kimlik == 9999){
						
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
							$db->query('INSERT INTO yazilar (baslik,resim, yazi,tarih, tip) VALUES("'.addslashes($_POST['baslik']).'","'.$_FILES["resim"]["name"].'","'.$_POST['yazi'].'","'.date('Y-m-d', time()).'",3)');
							die( "Makale Yazısı Başarıyla Eklendi. <a href='http://pilanlidiyet.com/yonet/index.php?sayfa=blog'>Geri Git</a>");
						  } 
						} 
}else{
	
	//die(print_r($_FILES)); 
	if($_FILES["resim"]['name'] <> ""){
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
							$resim_adi = $_FILES["resim"]["name"];	
							$db->query('UPDATE yazilar SET baslik="'.$baslik.'", yazi="'.$yazi.'", resim="'.$resim_adi.'" WHERE id='.$kimlik);						
							echo '<script>alert("Yazı Başarıyla Güncellendi"); history.back(1)</script>';
						  } 
						} 
	}else{
		$db->query('UPDATE yazilar SET baslik="'.$baslik.'", yazi="'.$yazi.'"  WHERE id='.$kimlik);
		echo '<script>alert("Yazı Başarıyla Güncellendi"); history.back(1)</script>';
	}
	
	
}
  
  
?>