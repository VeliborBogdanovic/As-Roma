<?php
				@session_start();
				
				if(isset($_GET['dugmence'])){
					$dugme=$_GET['dugmence'];
					if($dugme==1){
					$niz=1;
					$ime = $_REQUEST['ime'];
					$prezime = $_REQUEST['prezime'];
					$adresa = $_REQUEST['adresa'];
					$mail = $_REQUEST['mail'];
					$broj = $_REQUEST['broj'];
					$uloga="user";
				    $reIme = "/^[A-Z]{1}[a-z]{3,10}$/";
				    
					$reMail = "/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
					$reBroj = "/^06[0-9]{1}[0-9]{6,7}$/";
					$reAdresa="/^[A-Z][a-z]{5,}[0-9]{0,3}$/";
					
					
					
					if(!preg_match($reIme, $ime)){
						$niz==0;
					}
					
					else if(!preg_match($reAdresa, $adresa)){
						$niz==0;
					}
					else if(!preg_match($reMail, $mail)){
						$niz==0;
					}
					else if(!preg_match($reBroj, $broj)){
						$niz==0;
					}
					if($niz==1){
						$tmp_ime="";
						include("konekcija.php");
						$upit="SELECT user FROM korisnici";
						$query=mysql_query($upit,$konekcija);
						while($red=mysql_fetch_array($query)){
							if($red['user']==$ime){
								#echo ("<script type='text/javascript' > alert('Username vec postoji,molimo pokusajte opet');</script>");
								$tmp_ime=$red['user'];
							}
						}
						if($tmp_ime==""){
						$upit1="INSERT INTO korisnici(user,pass,adresa,email,broj,uloga) VALUES ('$ime','$prezime','$adresa','$mail','$broj','$uloga')";	
						$query1=mysql_query($upit1,$konekcija) or die ("upit nije izvresn".mysql_error());
						echo ("<script type='text/javascript' > alert('uspesno ste se registrovali');</script>");header("Location:index.php");}
						else { echo("<div style='margin:20px auto;text-align:center;margin-top:650px;margin-left:54px;position:absolute;z-index:2;font-size:17px;'><p style='color:#B30000;';>Username vec postoji,pokusajte opet</p></div>");}
						
					}}
				}
			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<hmtl xmlns="http://www.w3.org/1999/xhtml">
<html>

<head>
<title>AS ROMA-Registracija</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Roma,AS roma,fudbal,stadio,totiseria a"/>
<meta name="description" content="AS Roma je italijanski fudbalski klub "/>
<meta name="copyright" content="Prava zadržana Velibor Bogdanović"/>
<meta name="author" content="Velibor Bogdanović"/>
<link rel="shortcut icon" href="slike/roma5.png"/>
<link rel="stylesheet" type="text/css" href="stil.css" />
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="script1.js"></script>
<script type="text/javascript" src="script_provera.js"></script>

</head>
<body>

<div id="navigacija" >
<div id="navokvir" >
	<div id="slika" >
	<a href="" ><img src="slike/roma4.png" alt="HOME"  /></a>
	</div>
	<div id="as" > 
		<h1 id="h1" >A.S.ROMA</h1>
	</div>
	<div id="lista" >
	<?php 
		 include("meni.php");
	?>
	
	</div>
	<div >
		<a id="search" href="logout.php" >Logout</a>
		
	</div>
	</div>
	<div class="clear" ></div>
	
</div>
	<div id="okvir1">
	<div id="header"><img id="slike123"  src="slike/22.jpg" alt="o romi" />
	</div>
	<div id="kontakt">
		<h1>Registracija</h1>
		<div id="form2" >
			<form method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>"  id="formica">
			
			
			
			<table id="tabelform1">
				<tr>
					<td><label for="ime">User</label></td>
					<td><input class="input" id="ime" type="text" name="ime" maxlength="40" size="20"  autofocus/><span id="Ime"></span></td>
				</tr>
				 <tr>
					<td><label for="prezime">Password</label></td>
					<td><input class="input" id="prezime"  type="password" name="prezime" maxlength="40" size="20" /><span id="Prezime"></span></td>
				</tr>
				<tr>
					<td><label for="adresa">Adresa</label></td>
					<td><input class="input" id="adresa" type="text" name="adresa" maxlength="40" size="20" / ><span id="Adresa"></span></td>
				</tr>
				<tr>
					<td><label for="email">Email adresa</label></td>
					<td><input class="input" type="text" id="mail"  name="mail" maxlength="60" size="20" /><span id="Mail"></span></td>
				</tr>
				<tr>
					<td><label for="broj">Broj telefona</label></td>
					<td><input class="input" type="text" id="broj" name="broj" maxlength="14" size="12" /><span id="Broj"></span></td>
				</tr>
				<tr>
					<td colspan="2" id="td" >
					
					<input class="dugme" type="button" value="Pošalji"  name="dugmence1"  id="dugmence" onclick="provera();" /></a>
					<input class="dugme" type="reset"  value="Obriši"/>
					</td>
					
				</tr>
				
				
				
				
				</table>
			</form>
			
			</div>
			</div>
			<p style="text-align:center;color:#B30000;size:20px;text-decoration:none;margin:20px auto;margin-left:-100px;font-size:22px;">Ukoliko imate nalog<a href="login.php" style="text-align:center;color:#B30000;size:20px;text-decoration:none;margin:20px auto;margin-top:-100px;margin-left:80px;font-size:22px;">Login</a></p>
</div>


</body>
</html>