<section>
<img src="/images/online-bar.jpg" alt="" width="100%">
</section>
<section class="beyaz-bg py-5 md-8 py-4">
	<form action="randevu-olustur.php" method="post">
	<div class="container">
    	<div class="row online-randevu-formu">
        			<h1>ONLINE RANDEVU OLUŞTURUN</h1>
                    <hr>
                	<div class="col-md-12"><input type="datetime-local" name="randevu-tarih" class="adi" placeholder="Tarih" min="<?php echo date('Y-m-d'); ?>" required></div>
                	<div class="col-md-12"><input type="text" name="adi" class="adi" placeholder="Adınız Soyadınız" required></div>
                    <div class="col-md-12"><input type="email" name="eposta" class="eposta"  placeholder="E-Posta Adresiniz" required></div>
                    <div class="col-md-12"><input type="text" name="tel" class="tel"  placeholder="Telefon Numaranız"></div>
                    <div class="col-md-3"><select style="width: 100%;    padding: 7px;    margin-bottom: 10px;" name="cinsiyet" class"cinsiyet"  placeholder="Cinsiyetiniz" required><option value="">Cinsiyetiniz</option><option value="Bayan">Bayan</option><option value="Erkek">Erkek</option></select></div>
                    <div class="col-md-3"><input type="text" name="boy" class="tel"  placeholder="Boyunuz"></div>
                    <div class="col-md-3"><input type="text" name="kilo" class="tel"  placeholder="Kilonuz"></div>
                    <div class="col-md-3"><input type="text" name="yas" class="tel"  placeholder="Yaşınız"></div>
                    <div class="col-md-12">
                    	<textarea name="bilgiler" id="bilgiler" placeholder="Biraz kendinizden bahsedin..."></textarea>
                    </div>
                    <div class="col-md-12">
                    	<button>Randevu Oluştur</button>
                    </div>
                
               
        </div>
    </div>
    </form>
</section>