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
	   <div class="baslikVeri">
			<span class="baslikVeriY">Sporcu Verileri</span>
			</div>
	   <div width="500">
	   
	   <div class="searchBar">
	   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Sporcu Adını Giriniz...">
       </div>
	   
	   
	   <table class ="spVeri" id="spveri">
		



            <tr class="veriler">
                <th class="veriler">Sporcu Id</th>
                <th class="veriler">Sporcu Adı</th>
                <th class="veriler">Sporcu Soyadı</th>
                <th class="veriler">Doğum Tarihi</th>
                <th class="veriler">Sporcu Mevki</th>
				<th class="veriler">Sporcu Takım</th>
				<th class="veriler">Şut Yeteneği Skoru</th>
				<th class="veriler">Pas Yeteneği Skoru</th>
                <th class="veriler">Dribbling Yeteneği Skoru</th>
                <th class="veriler">Boy</th>
                <th class="veriler">Ağırlık</th>
                <th class="veriler">Sıçrama</th>
				<th class="veriler">Vücut Yağ Oranı</th>
				<th class="veriler">Beden Kitle Endeksi</th>
                <th class="veriler">Hız</th>
                <th class="veriler">Reaksiyon Süresi</th>
            </tr>

            <?php


            $sorgu = $baglanti->query("SELECT sporcu.sporcu_id, sporcu.sporcu_adi,sporcu.sporcu_soyadi,sporcu.dogum_tarihi,mevki.mevki_adi,takim.takim_adi,gozlem.sut,gozlem.pas,gozlem.dribbling,olcum.boy,olcum.agirlik,olcum.sicrama,olcum.vucut_yag_orani,olcum.beden_kitle_endeksi,olcum.hiz,olcum.reaksiyon_suresi
										FROM sporcu,mevki,takim,gozlem,olcum
										WHERE sporcu.mevki_id=mevki.mevki_id
										AND sporcu.takim_id=takim.takim_id
										AND sporcu.sporcu_id=olcum.sporcu_id
										AND sporcu.sporcu_id=gozlem.sporcu_id
										ORDER BY sporcu.sporcu_id
										LIMIT 18,18 "); // Makale tablosundaki tüm verileri çekiyoruz.

            while ($sonuc = $sorgu->fetch_assoc()) {

                $sporcu_id = $sonuc['sporcu_id']; // Veritabanından çektiğimiz id satırını $id olarak tanımlıyoruz.
                $sporcu_adi = $sonuc['sporcu_adi'];
                $sporcu_soyadi = $sonuc['sporcu_soyadi'];
                $dogum_tarihi = $sonuc['dogum_tarihi'];
                $mevki=$sonuc['mevki_adi'];
				$takim = $sonuc['takim_adi'];
                $sut = $sonuc['sut'];
                $pas=$sonuc['pas'];
				$dribbling = $sonuc['dribbling'];
                $boy = $sonuc['boy'];
                $agirlik=$sonuc['agirlik'];
				$sicrama = $sonuc['sicrama'];
                $vucutyo = $sonuc['vucut_yag_orani'];
                $bedenkitle=$sonuc['beden_kitle_endeksi'];
				$hiz = $sonuc['hiz'];
                $reaksiyon = $sonuc['reaksiyon_suresi'];
                


// While döngüsü ile verileri sıralayacağız. Burada PHP tagını kapatarak tırnaklarla uğraşmadan tekrarlatabiliriz. 

                ?>

                <tr class ="sss">
                    <td><?php echo $sporcu_id;?></td>
                    <td><?php echo $sporcu_adi;?></td>
                    <td><?php echo $sporcu_soyadi;?></td>
                    <td><?php echo $dogum_tarihi;?></td>
                    <td><?php echo $mevki;?></td>
					<td><?php echo $takim;?></td>
                    <td><?php echo $sut;?></td>
                    <td><?php echo $pas;?></td>
                    <td><?php echo $dribbling;?></td>
                    <td><?php echo $boy;?></td>
					<td><?php echo $agirlik;?></td>
					<td><?php echo $sicrama;?></td>
                    <td><?php echo $vucutyo;?></td>
                    <td><?php echo $bedenkitle;?></td>
                    <td><?php echo $hiz;?></td>
                    <td><?php echo $reaksiyon;?></td>
                </tr>

            <?php } ?>

</table>
<button class="buton2" type="button" onClick="location.href='spVeri.php'">Sayfa 1</button>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("spveri");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
  td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>   

</div>
</div>	   
	   
	   
	   
	   
	   
			
	   </div>
	
	</div>
	
</body>
</html>