<?php
include("vtabani.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz. 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sporcu Seçim KDS</title>
  <meta charset="utf-8">
  <meta name="description" content="Wstats KDS">
  <meta nam="keyword" content="Karar,Destek,Sistemi,Spor"
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
	   <div class="basliks">
			<span class="baslikYazisi">Sporcu Gelişimi</span>
			</div>
			<div class="bkeGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Beden Kitle Endeksi'],
          ['Yiğit Yaman',  25],
          ['Samet Erdinç',  23],
          ['Alp Karahan',  22.7],
		  ['Salih Kılıç',	23.7],
		  ['Bora Işık',	24.8],
		  ['Ömer Alp Doğulu',	21.7],
		  ['Mustafa Topçu',	21.3],
		  ['Erdem Kılınç',	24.1],
		  ['Emirhan Demir',	21.4],
		  ['Bora Can Karahan',	21.6],
		  ['Faruk Solak',	22.4],
		  ['Yunus Emre Yıldırım',	21.4],
		  ['Efecan Demir',	21.7],
		  ['Burak Dağlı',	20.8],
		  ['Semih Yurt',	22.1],
		  ['Serdar Taşçı',	22.3],
		  ['Batuhan Cansever',	21],
		  ['Serhat Eren',	24.2],
		  ['Can Altındağ',	21.6],
		  ['Haluk Çetin',	21.4],
		  ['Furkan Tunç',	23.4],
		  ['Uğur Alp Işık',	22.3],
		  ['Murat Günhan',	21.3],
		  ['Mert Çetin',	22.1],	 
		  ['Ömercan Işık',	23.6],
		  ['Doğan Güldal',	20.1],
		  ['Batuhan Aydın',	21.6],
		  ['Ersin Tekdemir',	23.4],
		  ['Abdullah Karaca',	22.5],
		  ['Denizcan Serter',	24.2],
		  ['Barbaros Ercan',	23.7],
		  ['Güneş Küçük',	23.1],
		  ['Evren Yaşar',	23.9],
		  ['Hasan Tekin',	22.8],
          ['Berkay Güney',  23.3]
		  
        ]);

        var options = {
          title: 'Sporcu Beden Kitle Endeksi Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: '5ab9ea' },
		  },
		  lineWidth: 5
        };
        

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
			
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1000px; height: 600px"></div>
  </body>
</html>
</div>

	



</div>
	
	</div>
	
</body>
</html>