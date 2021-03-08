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
			<div class="sicramaGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Sıçrama(cm)'],
          ['Yiğit Yaman',  27],
          ['Samet Erdinç',  29],
          ['Alp Karahan',  34],
		  ['Salih Kılıç',	36],
		  ['Bora Işık',	39],
		  ['Ömer Alp Doğulu',	30],
		  ['Mustafa Topçu',	25],
		  ['Erdem Kılınç',	31],
		  ['Emirhan Demir',	34],
		  ['Bora Can Karahan',	34],
		  ['Faruk Solak',	37],
		  ['Yunus Emre Yıldırım',	31],
		  ['Efecan Demir',	35],
		  ['Burak Dağlı',	32],
		  ['Semih Yurt',	38],
		  ['Serdar Taşçı',	36],
		  ['Batuhan Cansever',	27],
		  ['Serhat Eren',	31],
		  ['Can Altındağ',	33],
		  ['Haluk Çetin',	35],
		  ['Furkan Tunç',	34],
		  ['Uğur Alp Işık',	30],
		  ['Murat Günhan',	37],
		  ['Mert Çetin',	38],	 
		  ['Ömercan Işık',	36],
		  ['Doğan Güldal',	38],
		  ['Batuhan Aydın',	31],
		  ['Ersin Tekdemir',	34],
		  ['Abdullah Karaca',	35],
		  ['Denizcan Serter',	36],
		  ['Barbaros Ercan',	30],
		  ['Güneş Küçük',	24],
		  ['Evren Yaşar',	31],
		  ['Hasan Tekin',	32],
          ['Berkay Güney',  42]
		  
        ]);

        var options = {
          title: 'Sporcu Sıçrama Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: 'purple' },
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