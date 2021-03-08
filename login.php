<?php
session_start();
include "db_conn.php";

if(isset($_POST['uname']) && isset($_POST['password'])){
	
	function validate($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	

	$uname=validate($_POST['uname']);
	$pass=validate($_POST['password']);
	if(empty($uname)){
		header("Location: index.php?error=Kullanıcı Adı Gerekli");
		exit();
	}else if(empty($pass)){
		header("Location: index.php?error=Şifre Gerekli");
		exit();
	}else{
		$sql="SELECT * FROM admin WHERE kullanici_adi='$uname' AND sifre=
		'$pass'";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)==1){
			$row=mysqli_fetch_assoc($result);
			if($row['kullanici_adi']===$uname &&$row['sifre']===$pass){
				$_SESSION['kullanici_adi'] = $row['kullanici_adi'];
				$_SESSION['admin_id'] = $row['admin_id'];
				header("Location: anasayfa.php");
				exit();
			}else{
				header("Location: index.php?error=Yanlış Kullanıcı Adı veya Şifre!");
			exit();
			}
		}else{
			header("Location: index.php?error=Yanlış Kullanıcı Adı veya Şifre!");
			exit();
			
		}
	}

}else{
	header("Location: girisEkran.php");
	exit();
}
