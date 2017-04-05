<?php 
	session_start();
	include("konekcija.php");
	
	#$dugme=$_REQUEST['log'];
	if(isset($_POST['log'])){
		
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$upit="SELECT * FROM korisnici WHERE user='$user' AND pass='$pass'";
	$query=mysql_query($upit,$konekcija)  or die ("upit nije izvrsen ".mysql_error());
			if(($red=mysql_num_rows($query))==0){
			echo ("<p style='text-align:center;color:#B30000;size:20px;text-decoration:none;margin:20px auto;margin-left:0px;font-size:15px;'>Uneti username ili password nije dobar</p> ");
			}
			else{
			$upit1="SELECT * FROM korisnici WHERE user='$user' AND pass='$pass'";
			$rez1=mysql_query($upit1)or die ("upit nije  dobar");
			
			$korisnik=mysql_fetch_array($rez1);
			$uloga=$korisnik['uloga'];
			$id=$korisnik['id'];
			$_SESSION['uloga']=$uloga;
			$_SESSION['id']=$id;
			 if ($uloga=='user'){
				
				header("Location:index.php");
				break;
				
			}
			if($uloga=="admin"){
				
				header('Location:index.php');
				break;
			}
	}}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<hmtl xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>AS ROMA-login</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Roma,AS roma,fudbal,stadio,totiseria a"/>
<meta name="description" content="AS Roma je italijanski fudbalski klub "/>
<meta name="copyright" content="Prava zadržana Velibor Bogdanović"/>
<meta name="author" content="Velibor Bogdanović"/>
<link rel="shortcut icon" href="slike/roma5.png"/>
<link rel="stylesheet" type="text/css" href="stil.css" />
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</head>
<body style="background-image:url(slike/11.jpg);background-repeat:y; font: verdana, arial, helvetica, sans-serif;opacity:1; color:#BBBBBB">

	<div id="slika" >
	<a href="" ><img src="slike/roma4.png" alt="HOME"  style="margin:20px auto;text-align:center;margin-top:70px;margin-left:550px;" /></a>
	</div>
	<div id="as" > 
		<h1 id="h1" style="margin:20px auto;text-align:center;margin-top:85px;margin-left:560px;" >A.S.ROMA</h1>
	</div>
				<table border="1"  style="margin:20px auto;text-align:center;margin-top:200px;">
					
			<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>"  name="forma5">
			  <table id="tabela4" border="1"  style="margin:20px auto;text-align:center;margin-top:-50px;">
				
				<thead>
							
						<tr><th><label><p>Username</br></p></label></th></tr>
					<tr>	<th><input  type="text" name="username" /></th>
					
						</tr>
					</thead>
					<tbody>
						<tr>
								<td><label><p>Password</br></p></label></td></tr>
								<tr><td><input type="password" name="password"></td>
						</tr>
						<tr>
								<td><input type="submit" name="log" value="Log in" id="log" class="dugme"></td>
						</tr>
						
						
					</tbody>
				
			</form>
</table>
		<a href="Formular.php?dugmence=5" style="text-align:center;color:#B30000;size:20px;text-decoration:none;margin:20px auto;margin-top:70px;margin-left:630px;font-size:22px;">Registrujte se </a>



</body>
</html>