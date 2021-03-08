<?php
include("vtabani.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sporcu Seçim KDS</title>
  <meta charset="utf-8">
  <meta name="description" content="Wstats KDS">
  <meta name="keyword" content="Karar,Destek,Sistemi,Spor"
  
  <link href="C:\Users\FooFoo'\Desktop\DERSLER\web tasarımı hafta9 dashboard\kun.css"rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
  </script>
  <link rel="stylesheet" type="text/css" href="tasarim.css" />

</head>
<body>
  
      <div class="sidebar">
        <div class="logo">
          <img src="https://i.hizliresim.com/Daovp1.png"/> 
        </div>
    
    <div class="status">
      <img src="https://e7.pngegg.com/pngimages/967/78/png-clipart-batman-arkham-asylum-computer-icons-superhero-bat-comics-mammal.png">
      <div class="info">
        <span>Berkant Çınar</span>
        <span2>Yönetici</span2>
        <span><strong>berkantcnr@gmail.com</strong></span>
      </div>
    </div>
                
    <div class="mainNav">ANA MENÜ</div>
    <div class="anaSayfa">
	<a href ="anasayfa.php" style="color:white; text-decoration: none;">
      <i class="fas fa-home"></i>
      <span>Ana Sayfa</span></a>
    </div>
	

    <div class="sporcuVeri">
	<a href ="spVeri.php" style="color:white; text-decoration: none;">
      <i class="fas fa-basketball-ball"></i>
      <span>Sporcu Verileri</span></a>
    </div>
        
    <div class="spGelisim">
	<a href ="spGelisim.php" style="color:white; text-decoration: none;">
      <i class="fas fa-user-alt"></i>
      <span>Sporcu Gelişimi</span></a>
    </div>
	
    <div class="cikis">
	<a href ="index.php" style="color:white; text-decoration: none;">
      <i class="fas fa-sign-out-alt"></i>
      <span>Çıkış Yap</span></a>
    </div>
           
  </div>
   <div class="content">
	   <div class="header">
    <span>wStats Sporcu Seçim Karar Destek Sistemi</span>	
       <i class="fas fa-cogs"></i>
	   </div>
     
	   <div class="main">
			<div class="baslik">
			<span class="baslikYazi">Sporcu Gelişimi</span>
			</div>
		
			<div class="filtre" >
			<p>Oyuncu Grafikleri Ekranı</p>
			<p>Görüntülemek İstediğiniz Grafiği Seçin:</p>
			<div class="buttons">
 
			<form action="sutGrafik.php">
			<button class="sutB" type="submit">Şut Skoru</button>
			</form>
			<form action="pasGrafik.php">
			<button class="pasB" type="submit">Pas Skoru</button>
			</form>
			<form action="dribblingGrafik.php">
			<button class="dribblingB" type="submit">Dribbling </button>
			</form>
			<form action="boyGrafik.php">
			<button class="boyB" type="submit">Boy(cm) </button>
			</form>
			<form action="agirlikGrafik.php">
			<button class="agirlikB" type="submit">Ağırlık(kg) </button>
			</form>
			<form action="sicramaGrafik.php">
			<button class="sicramaB" type="submit">Sıçrama </button>
			</form>
			<form action="vyoGrafik.php">
			<button class="vyoB" type="submit">Vücut Yağ Oranı</button>
			</form>
			<form action="bkeGrafik.php">
			<button class="bkeB"type="submit">Beden Kitle Endeksi </button>
			</form>
			<form action="hizGrafik.php">
			<button class="hizB"type="submit">Hız </button>
			</form>
			<form action="reaksiyonGrafik.php">
			<button class="reaksiyonB" type="submit">Reaksiyon </button>
			</form>
			
			</div>
			
			
			
			


	   </div>
	
	</div>
	
</body>
</html>