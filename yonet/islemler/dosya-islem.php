<?php
include('../../ayar/baglanti.php');
if(@$_SESSION['giris'] != 'yapildi'){
	include('giris-yap.php');
	die();
}


						$sayfa = @$_GET['sayfa'];

						$target_dir = "/home/pilanlidiyet/public_html/images/yuklenen/";
						$target_file = $target_dir . basename($_FILES["resim"]["name"]);
						
						$uploadOk = 1;
						$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
						
						$ext = array('xls', 'xlsx', 'doc', 'docx', 'pdf','jpeg', 'jpg','png','gif');
						$file_x = explode('.',$_FILES['resim']['name']);
						
						//print_r($_FILES);
						if(!in_array($file_x[1],$ext)){
							die('Yanlızca '.implode(', ', $ext).' uzantılı dosyaları yükleyebilirsiniz.');
						}
						
						
						if (file_exists($target_file)) {
						  die(htmlspecialchars( basename( $_FILES["resim"]["name"])).". Bu isimde bir dosya zaten mevcut. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						if ($_FILES["resim"]["size"] > 2097152) {
						  die("Dosya 2MB'den büyük olamaz. <a href='javascript:history.back(1);'>Geri Git</a>");
						  $uploadOk = 0;
						}
						
						
						
						
						
						if ($uploadOk == 0) {
						  echo "Dosya Yüklenemedi.";
						
						} else {
						  if (move_uploaded_file($_FILES["resim"]["tmp_name"], $target_file)) {
							$db->query('INSERT INTO dosyalar (dosya) VALUES("'.$_FILES["resim"]["name"].'")');
							die( htmlspecialchars( basename( $_FILES["resim"]["name"]))." isimli dosya başarıyla yüklendi . <a href='javascript:history.back(1);'>Geri Git</a>");
						  } 
						}
?>

