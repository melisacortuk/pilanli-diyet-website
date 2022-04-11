<html>
<head>
<title>Giriş Yap - Diyetisyen Büşra Pilan</title>
<style>
html, body{
	width:100%;
	height:100%;
	padding:0;
	margin:0;
	font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
}

table.kapsam{
	width:100%;
	height:100%;
}

table.giris-formu {
    width: 300px;
    background: #e0e0e0;
    padding: 15px;
    border-radius: 5px;
}

table.giris-formu input{
	width:100%;
	padding:6px;
	margin-bottom:10px;
}

h1{
	text-align:center;
}

p.hata{
color:Red;
}
</style>
</head>
<body>
<table class="kapsam">
	
	<tr>
		<td align="center" valign="middle">
        	<form action="giris.php" method="post">
        	<table class="giris-formu">
            	<?php
                if(isset($_GET['hata'])){
					echo '
						<tr>
							<td align="center">
								<p class="hata">Kullanıcı adı veya şifre hatalıdır.</p>
							</td>
						</tr>
					';
				}
				?>
            	<tr>
                    <td><h1>GİRİŞ YAP</h1></td>
                </tr>
        		<tr>
        			<td>
                    	<span>Kullanıcı Adı</span>
                        <input type="text" name="kullanici" placeholder="Kullanıcı Adınızı Yazınız">
                    </td>
        		</tr>
                
                <tr>
        			<td>
                    	<span>Şifre</span>
                        <input type="password" name="sifre" placeholder="Şifrenizi Yazınız">
                    </td>
        		</tr>
                
                <tr>
        			<td>                    	
                        <button>Giriş Yap</button>
                    </td>
        		</tr>
        	</table>
            </form>
        </td>
	</tr>
</table>	
</body>
</html>