<?php 
$host="mysql14.000webhost.com";
$pass="student94";
$user="a5087901_baza";
$baza="a5087901_baza";
$konekcija=mysql_connect($host,$user,$pass) or die ("Nije uspela konekcija".mysql_error());
$konekt_baza=mysql_select_db($baza,$konekcija) or die ("Nije uspela baza ".mysql_error());

?>


