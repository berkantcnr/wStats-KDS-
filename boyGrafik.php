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
			<div class="boyGrafik">
			<html>
			
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Sporcu', 'Boy(cm)'],
          ['Yiğit Yaman',  176],
          ['Samet Erdinç',  178],
          ['Alp Karahan',  178],
		  ['Salih Kılıç',	184],
		  ['Bora Işık',	191],
		  ['Ömer Alp Doğulu',	174],
		  ['Mustafa Topçu',	173],
		  ['Erdem Kılınç',	178],
		  ['Emirhan Demir',	180],
		  ['Bora Can Karahan',	194],
		  ['Faruk Solak',	179],
		  ['Yunus Emre Yıldırım',	176],
		  ['Efecan Demir',	180],
		  ['Burak Dağlı',	184],
		  ['Semih Yurt',	189],
		  ['Serdar Taşçı',	172],
		  ['Batuhan Cansever',	172],
		  ['Serhat Eren',	180],
		  ['Can Altındağ',	185],
		  ['Haluk Çetin',	187],
		  ['Furkan Tunç',	173],
		  ['Uğur Alp Işık',	175],
		  ['Murat Günhan',	181],
		  ['Mert Çetin',	183],	 
		  ['Ömercan Işık',	186],
		  ['Doğan Güldal',	174],
		  ['Batuhan Aydın',	174],
		  ['Ersin Tekdemir',	179],
		  ['Abdullah Karaca',	186],
		  ['Denizcan Serter',	194],
		  ['Barbaros Ercan',	170],
		  ['Güneş Küçük',	176],
		  ['Evren Yaşar',	176],
		  ['Hasan Tekin',	182],
          ['Berkay Güney',  192]
		  
        ]);

        var options = {
          title: 'Sporcu Boy Grafiği',
          legend: { position: 'right' },
		  series: {
            0: { color: '2f2fa2' },
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