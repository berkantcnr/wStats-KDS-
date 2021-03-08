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
			<div class="hizGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Hız'],
          ['Yiğit Yaman',  8.13],
          ['Samet Erdinç',  8.65],
          ['Alp Karahan',  7.73],
		  ['Salih Kılıç',	7.25],
		  ['Bora Işık',	6.89],
		  ['Ömer Alp Doğulu',	8.5],
		  ['Mustafa Topçu',	8.12],
		  ['Erdem Kılınç',	7.45],
		  ['Emirhan Demir',	7.33],
		  ['Bora Can Karahan',	6.99],
		  ['Faruk Solak',	8.75],
		  ['Yunus Emre Yıldırım',	7.89],
		  ['Efecan Demir',	7.76],
		  ['Burak Dağlı',	7.67],
		  ['Semih Yurt',6.78],
		  ['Serdar Taşçı',	8.91],
		  ['Batuhan Cansever',	7.75],
		  ['Serhat Eren',	7.56],
		  ['Can Altındağ',	7.4],
		  ['Haluk Çetin',	6.59],
		  ['Furkan Tunç',	8.12],
		  ['Uğur Alp Işık',	7.71],
		  ['Murat Günhan',	7.84],
		  ['Mert Çetin',	7.34],	 
		  ['Ömercan Işık',	6.71],
		  ['Doğan Güldal',	9.1],
		  ['Batuhan Aydın',	7.58],
		  ['Ersin Tekdemir',	7.54],
		  ['Abdullah Karaca',	7.19],
		  ['Denizcan Serter',	6.59],
		  ['Barbaros Ercan',	8.55],
		  ['Güneş Küçük',	7.3],
		  ['Evren Yaşar',	7.41],
		  ['Hasan Tekin',	7.47],
          ['Berkay Güney',  6.75]
		  
        ]);

        var options = {
          title: 'Sporcu Hız Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: 'fbe8a6' },
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