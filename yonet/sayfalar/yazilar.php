<?php
if($izin != 'ver'){die('Yetkiniz Yok');}
$kimlik = (int)@$_GET['kimlik'];
$sorgu = $db->query('SELECT * FROM yazilar WHERE id='.$kimlik);
$sorgu = $sorgu->fetch_assoc();
?>
<div class="yazilar_kapsam">
<form action="islemler/yazi-islem.php?kimlik=<?php echo $kimlik?>" method="post" enctype="multipart/form-data">
    <table class="yazilar">               
        <tr>
            <td>
                <span>Yazı Başlığı</span>
                <input type="text" name="baslik" placeholder="Yazınızın başlığı" value="<?php echo $sorgu['baslik']?>">
            </td>
        </tr>
        <?php if(@$_GET['tur'] == 'blog'){?>
        <tr>
            <td>
                <span>Resim</span>
                <input type="file" name="resim" placeholder="Zorunlu Değil">
            </td>
        </tr>
        <?php }?>
        <tr>
            <td>                    	
                <span>Yazı İçeriği</span>
                <textarea name="yazi"><?php echo $sorgu['yazi']?></textarea>
            </td>
        </tr>
        
        <tr>
            <td>                    	
                <button>Ekle/Düzenle</button>
            </td>
        </tr>
    </table>
</form>
</div>
<script>
$('textarea').summernote({
	height:500,
	fontSizes: ['8', '9', '10', '11', '12', '14', '18'],
	  toolbar: [
		// [groupName, [list of button]]
		['style', ['bold', 'italic', 'underline', 'clear']],
		['font', ['fontname']],
		['fontsize', ['fontsize']],
		['color', ['color']],
		['para', ['ul', 'ol', 'paragraph']],
		['height', ['height']],
		['insert', ['link', 'picture', 'video']],
		['table', ['table']],
 		['view', ['fullscreen', 'codeview', 'help']]
	  ]
});
</script>