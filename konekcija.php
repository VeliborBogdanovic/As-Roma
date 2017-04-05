<?php 
$host="localhost";
$pass="";
$user="root";
$baza="podaci";
$konekcija=mysql_connect($host,$user,$pass) or die ("Nije uspela konekcija".mysql_error());
$konekt_baza=mysql_select_db($baza,$konekcija) or die ("Nije uspela baza ".mysql_error());

?>