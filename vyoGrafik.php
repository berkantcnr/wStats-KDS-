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
			<div class="vyoGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Vücut Yağ Oranı(%)'],
          ['Yiğit Yaman',  11],
          ['Samet Erdinç',  13.4],
          ['Alp Karahan',  16.7],
		  ['Salih Kılıç',	14.7],
		  ['Bora Işık',	20.4],
		  ['Ömer Alp Doğulu',	11.5],
		  ['Mustafa Topçu',	14.2],
		  ['Erdem Kılınç',	17.6],
		  ['Emirhan Demir',	17.5],
		  ['Bora Can Karahan',	17.8],
		  ['Faruk Solak',	14.3],
		  ['Yunus Emre Yıldırım',	17.5],
		  ['Efecan Demir',	12.3],
		  ['Burak Dağlı',	13.4],
		  ['Semih Yurt',	13.7],
		  ['Serdar Taşçı',	14.6],
		  ['Batuhan Cansever',	14.1],
		  ['Serhat Eren',	16.3],
		  ['Can Altındağ',	16.4],
		  ['Haluk Çetin',	17.4],
		  ['Furkan Tunç',	17.2],
		  ['Uğur Alp Işık',	15],
		  ['Murat Günhan',	19.1],
		  ['Mert Çetin',	15.7],	 
		  ['Ömercan Işık',	13.2],
		  ['Doğan Güldal',	13],
		  ['Batuhan Aydın',	13.8],
		  ['Ersin Tekdemir',	17.6],
		  ['Abdullah Karaca',	18.4],
		  ['Denizcan Serter',	19.1],
		  ['Barbaros Ercan',	18.4],
		  ['Güneş Küçük',	17],
		  ['Evren Yaşar',	18.8],
		  ['Hasan Tekin',	15.9],
          ['Berkay Güney',  19]
		  
        ]);

        var options = {
          title: 'Sporcu Vücut Yağ Oranı Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: 'ffe400' },
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