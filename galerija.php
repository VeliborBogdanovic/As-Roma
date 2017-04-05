<?php @session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<hmtl xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
<title>AS ROMA-Galerija</title>
<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Roma,AS roma,fudbal,stadion,toti,seria a"/>
<meta name="description" content="AS Roma je italijanski fudbalski klub "/>
<meta name="copyright" content="Prava zadržana Velibor Bogdanović"/>
<meta name="author" content="Velibor Bogdanović"/>
<link rel="shortcut icon" href="slike/roma5.png"/>
<link rel="stylesheet" type="text/css" href="stil.css" />
<link type="text/css" rel="stylesheet" href="lightGallery.css" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="lightGallery.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#lightGallery").lightGallery(); 
  });
</script>
</head>
<body>

<nav id="navigacija" >
<div id="navokvir" >
	<div id="slika" >
	<a href="index.php" ><img id="slika1"  src="slike/roma4.png" alt="HOME" /></a>
	</div>
	<div id="as" > 
		<h1 id="h1" >A.S.ROMA</h1>
	</div>
	<div id="lista" >
	<?php 
		include ("meni.php");
	?>
	</div>
	
	<div >
		<a id="search" href="logout.php" >Logout</a>
		
	</div>
	</div>
	<div class="clear" ></div>
	
</nav>
<div id="okvir" >
	
	
	<div id="galerija" > 
		<div id="galerija2">
			<div id="lightGallery" class="prve2">
				<a data-src="slike/2.jpg">
					<img src="slike/2-2.jpg" />
				</a>
				<a data-src="slike/3.jpg">
					<img src="slike/3-3.jpg" />
				</a>
					<a data-src="slike/4.jpg">
					<img src="slike/4-4.jpg" />
				</a>
				<a data-src="slike/5.jpg">
					<img src="slike/5-5.jpg" />
				</a>
					<a data-src="slike/1.jpg">
					<img src="slike/1-1.jpg" />
				</a>
				<a data-src="slike/6.jpg">
					<img src="slike/6-6.jpg" />
				</a>
				
			</div>
			
		</div>	
	
	
	</div>
		
</div>	
<footer id="footer" >
	
	<ul>
      <li><a href="index.html" >Početna</a></li>
    
	
       <li><a href="Oautoru.html" >O autoru</a></li>
	    <li><a href="sitemap.xml" >Sitemap</a></li>
		 <li><a href="igraci.xml" >XML</a></li>
		 <li><a href="dokumentacija.pdf" >Dokumentacija</a></li>
	</ul>
		<div id="ikonice" >
	<a href="http:www.facebook.com/ljave94" ><img id="fb" src="slike/facebook.png" alt="Facebook-Profile"/></a>
	<a href="www.twitter.com" ><img id="tw" src="slike/twitter.png" alt="Twitter"/></a>
	<a href="www.googleplus.com" ><img id="gp" src="slike/googlePlus.gif" alt="googleplus"/> </a>
	<a href="rss.xml"><img src="slike/rss.jpg"  alt="rss"/></a>
	
	
</div>	
<div id="cr"> <p>Velibor Bogdanovic 67/13Copyright®2015</p>
</div>

</footer>
</body>
</html>