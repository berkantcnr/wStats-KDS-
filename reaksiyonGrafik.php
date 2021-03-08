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
			<div class="reaksiyonGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Reaksiyon Süresi'],
          ['Yiğit Yaman',  0.24],
          ['Samet Erdinç',  0.21],
          ['Alp Karahan',  0.23],
		  ['Salih Kılıç',	0.27],
		  ['Bora Işık',	0.31],
		  ['Ömer Alp Doğulu',	0.27],
		  ['Mustafa Topçu',	0.24],
		  ['Erdem Kılınç',	0.26],
		  ['Emirhan Demir',	0.29],
		  ['Bora Can Karahan',	0.34],
		  ['Faruk Solak',	0.33],
		  ['Yunus Emre Yıldırım',	0.23],
		  ['Efecan Demir',	0.23],
		  ['Burak Dağlı',	0.26],
		  ['Semih Yurt',	0.31],
		  ['Serdar Taşçı',	0.40],
		  ['Batuhan Cansever',	0.27],
		  ['Serhat Eren',	0.28],
		  ['Can Altındağ',	0.24],
		  ['Haluk Çetin',	0.29],
		  ['Furkan Tunç',	0.33],
		  ['Uğur Alp Işık',	0.27],
		  ['Murat Günhan',	0.30],
		  ['Mert Çetin',	0.28],	 
		  ['Ömercan Işık',	0.27],
		  ['Doğan Güldal',	0.22],
		  ['Batuhan Aydın',	0.26],
		  ['Ersin Tekdemir',	0.28],
		  ['Abdullah Karaca',	0.26],
		  ['Denizcan Serter',	0.31],
		  ['Barbaros Ercan',	0.15],
		  ['Güneş Küçük',	0.29],
		  ['Evren Yaşar',	0.24],
		  ['Hasan Tekin',	0.23],
          ['Berkay Güney',  0.29]
		  
        ]);

        var options = {
          title: 'Sporcu Reaksiyon Süresi Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: 'ffccbc' },
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