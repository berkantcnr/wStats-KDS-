<!DOCTYPE html>
<html>
<head>
	<title>GİRİŞ EKRANI</title>
	<link rel="stylesheet" "type=text\css" href="styles.css">
</head>
<body>
<div class="logom">
          <img src="https://i.hizliresim.com/Daovp1.png" width= "600px" height= "300px" /> 
        </div>
		
	<label class="adminLabel" >WSTATS SPORCU KARAR DESTEK SİSTEMİ</label>	
	
	<form action="login.php" method="post">
		<h2>GİRİŞ YAP</h2>
		<?php if (isset($_GET['error'])) { ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php }?>
		<label>Kullanıcı Adı</label>
		<input type="text" name="uname" placeholder="Kullanıcı Adı"><br>
		
		<label>Şifre</label>
		<input type="password" name="password" placeholder="Şifre"><br>
		
		<button type ="submit">Giriş</button>
	</form>
</body>
</html>