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
  <link rel="stylesheet" type="text/css" href="grafik.css" />

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
			<div class="sutGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Şut Yeteneği Skoru(/10)'],
          ['Yiğit Yaman',  7],
          ['Samet Erdinç',  8],
          ['Alp Karahan',  7],
		  ['Salih Kılıç',	5],
		  ['Bora Işık',	4],
		  ['Ömer Alp Doğulu',	6],
		  ['Mustafa Topçu',	7],
		  ['Erdem Kılınç',	7],
		  ['Emirhan Demir',	7],
		  ['Bora Can Karahan',	5],
		  ['Faruk Solak',	7],
		  ['Yunus Emre Yıldırım',	8],
		  ['Efecan Demir',	5],
		  ['Burak Dağlı',	6],
		  ['Semih Yurt',	5],
		  ['Serdar Taşçı',	6],
		  ['Batuhan Cansever',	7],
		  ['Serhat Eren',	7],
		  ['Can Altındağ',	6],
		  ['Haluk Çetin',	4],
		  ['Furkan Tunç',	5],
		  ['Uğur Alp Işık',	8],
		  ['Murat Günhan',	5],
		  ['Mert Çetin',	7],	 
		  ['Ömercan Işık',	7],
		  ['Doğan Güldal',	7],
		  ['Batuhan Aydın',	6],
		  ['Ersin Tekdemir',	6],
		  ['Abdullah Karaca',	8],
		  ['Denizcan Serter',	5],
		  ['Barbaros Ercan',	5],
		  ['Güneş Küçük',	6],
		  ['Evren Yaşar',	6],
		  ['Hasan Tekin',	4],
          ['Berkay Güney',  4]
		  
        ]);

        var options = {
          title: 'Sporcu Şut Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: '#e2431e' },
		  },
		  lineWidth: 5,
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