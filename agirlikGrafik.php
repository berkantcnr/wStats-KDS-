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
			<div class="agirlikGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Ağırlık(kg)'],
          ['Yiğit Yaman',  65],
          ['Samet Erdinç',  70],
          ['Alp Karahan',  72],
		  ['Salih Kılıç',	78],
		  ['Bora Işık',	93],
		  ['Ömer Alp Doğulu',	63],
		  ['Mustafa Topçu',	67],
		  ['Erdem Kılınç',	74],
		  ['Emirhan Demir',	73],
		  ['Bora Can Karahan',	86],
		  ['Faruk Solak',	70],
		  ['Yunus Emre Yıldırım',	70],
		  ['Efecan Demir',	71],
		  ['Burak Dağlı',	76],
		  ['Semih Yurt',	81],
		  ['Serdar Taşçı',	64],
		  ['Batuhan Cansever',	65],
		  ['Serhat Eren',	74],
		  ['Can Altındağ',	80],
		  ['Haluk Çetin',	80],
		  ['Furkan Tunç',	70],
		  ['Uğur Alp Işık',	71],
		  ['Murat Günhan',	76],
		  ['Mert Çetin',	77],	 
		  ['Ömercan Işık',	79],
		  ['Doğan Güldal',	61],
		  ['Batuhan Aydın',	67],
		  ['Ersin Tekdemir',	76],
		  ['Abdullah Karaca',	81],
		  ['Denizcan Serter',	88],
		  ['Barbaros Ercan',	66],
		  ['Güneş Küçük',	75],
		  ['Evren Yaşar',	75],
		  ['Hasan Tekin',	79],
          ['Berkay Güney',  86]
		  
        ]);

        var options = {
          title: 'Sporcu Ağırlık Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: '97caef' },
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