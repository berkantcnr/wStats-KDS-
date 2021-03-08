<?php


$sname="localhost";
$uname="root";
$password="";
$db_name="2017469055";
$conn = mysqli_connect($sname,$uname, $password, $db_name);

if(!$conn) {
	echo "Bağlantı Başarısız!";
}