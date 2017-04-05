<?php 
@session_start();
 if(!isset($_SESSION['uloga'])){
	 
	 header("Location:login.php");
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<hmtl xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>AS ROMA</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Roma,AS roma,fudbal,stadio,totiseria a"/>
<meta name="description" content="AS Roma je italijanski fudbalski klub "/>
<meta name="copyright" content="Prava zadržana Velibor Bogdanović"/>
<meta name="author" content="Velibor Bogdanović"/>
<link rel="shortcut icon" href="slike/roma5.png"/>
<link rel="stylesheet" type="text/css" href="stil.css" />
<link rel="stylesheet" href="panel.css" type="text/css" media="screen" charset="utf-8"/>
<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="jquery-color-master/jquery.color.js"></script>
<script type="text/javascript" src="script.js"></script>

<script type="text/javascript" src="script1.js"></script>

		
	
</head>
<body>

<div id="navigacija" >
<div id="navokvir" >
	<div id="slika" >
	<a href="index.php" ><img id="slika1"  src="slike/roma4.png" alt="HOME" /></a>
	</div>
	<div id="as" > 
		<h1 id="h1" >A.S.ROMA</h1>
	</div>
	<div id="lista" >
	
		<?php  include("meni.php");?>
	
	</div>
		<div >
		<a id="search" href="logout.php" >Logout</a>
		
	</div>
	
	
	
	</div>
	<div class="clear" ></div>
	
</div>
<div id="okvir" >
	<div id="header"><img id="slike123"  src="slike/22.png" alt="o romi" />
	</div>
	<div id="glavno">
	<div class="levakolona">
		<h2>Trenutna tabela</h2>

	<?php include("stranicenje_p.php");?>
		<h3>Sledeca utakmica</h3>
		<p> 17.07.2015 <br />
		Roma-Udinese </p> <br />
		
		<div id="ishod" >
			
			<form  name="forma" action="" method="post">
				<?php include("anketa.php"); ?>
			</table>
			
		</div>
	</div>
	<div id="desno">
		<div id="uvod">
			 <h2>Najnovije vesti</h2>
		</div>
		<div class="vesti" id="toti" >
		<p><strong>Frančesko Toti</strong> ima 36 godina, a i dalje je ključni igrač 'Vučice'.  U fudbalu me najviše motiviše to što je pun iznenađenja." izjavio je 'Princ Rima'.Toti je drugi strelac u istoriji italijasnkog klupskog fudbala sa 227 postignutih golova. Nedavno je izjavio da želi da igra dok ne obori rekord Silvija Pijole (274).</p>
		<a href="#" ></a>	
		</div>
		<div class="vesti" id="bufon">
		<h4>Bufon upozorava: Šampionska trka nije gotova Roma je opasna</h4>
		<p>"To su vrlo tri vrlo važna boda. Međutim, moramo da budemo veoma oprezni. Nije još gotovo. Roma je veoma jaka ekipa koja se ne takmiči u Evropi, što je veoma važan faktor", rekao je Bufon za italijanske medije.</p>
		<a href="#" ></a>
		</div>
		<div class="vesti" id="transfer" >
		<div id="slika2"><img src="slike/mandzukic.png"/></div>
		<div id="tekst"><h4>Roma u junu jača za Mandžukića?</h4>
		<p>Mario Mandžukić nije na istim talasnim dužnama sa Pepeom Gvardiolom, a rešenje problema mogla bi da bude selidba u Rim. Roma je zainteresovana za hrvatskog reprezentativca koji će posle dolaska Roberta Levandovskog u junu pasti u drugi plan.</p><a href="#" ></a>	</div>
		
		</div>
		<div class="vesti" id="bokseri">
		<h4>"Bokseri" De Rosi i Hesus kažnjeni sa tri utakmice</h4>
		<p>Fudbaler Rome Daniele De Rosi suspendovan je tri utakmice zbog udaranja igrača Intera Maura Ikardija tokom duela ova dva tima u subotu, završenim bez golova.  Glavni sudija Mauro Bergonci nije video kada je Rosi pogodio Argentinca.</p><a href="#" ></a>	
		</div>
	</div>
	</div>
</div>
<div id="footer" >
	<ul>
       <li><a href="galerija.html" >Galerija</a></li>
      
	
       <li><a href="Oautoru.html" >O autoru</a></li>
	    <li><a href="sitemap.xml" >Sitemap</a></li>
		 <li><a href="igraci.xml" >XML</a></li>
		 <li><a href="dokumentacija.pdf" >Dokumentacija</a></li>
	</ul>
<div id="ikonice" >
	<a href="http:www.facebook.com/ljave94" ><img id="fb" src="slike/facebook.png" alt="Facebook-Profile" /></a>
	<a href="www.twitter.com" ><img id="tw" src="slike/twitter.png" alt="Twitter" /></a>
	<a href="www.googleplus.com" ><img id="gp" src="slike/googlePlus.gif" alt="googleplus"/></a>
	<a href="rss.xml"><img src="slike/rss.jpg"  alt="rss"/></a>
	
	
</div>	
<div id="cr"> <p>Velibor Bogdanovic 67/13.Sva prava zadržana.Copyright®2015 </p>
</div>

</div>
</body>
</html>