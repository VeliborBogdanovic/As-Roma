<?php 
	@session_start();
	include("konekcija.php");
	function podMeni($id)
	{
			$upit_podmeni = "SELECT * FROM meni WHERE roditelj = ".$id;
			$rez_podmeni = mysql_query($upit_podmeni)or die("Greska: ".mysql_error());

			if(mysql_num_rows($rez_podmeni))
			{
				echo("<ul >");
				while($red_podmeni = mysql_fetch_array($rez_podmeni))
				{
					echo("<li>");
						echo(" <a href=".$red_podmeni['href'].">".$red_podmeni['naziv']."</a> ");
						podMeni($red_podmeni['id']);
					echo("</li>");
				}
				echo("</ul>");
			}
	}
		
		$upit = "SELECT * FROM meni";
	
		$rez_meni = mysql_query($upit)or die("Greska: ".mysql_error());
		
		echo("<ul >");
		
		
		while( $red_meni = mysql_fetch_array($rez_meni))
		{
			if($red_meni['roditelj'] == 0)
			{
				echo("<li>");
				
					
					echo("<a href=".$red_meni['href'].">".$red_meni['naziv']."</a>");
					
				podMeni($red_meni['id']);
				echo("</li>");
			}
		}
		
		if(isset($_SESSION['uloga'])){
		if($_SESSION['uloga']=="admin"){
			echo("<li>");
						echo("<a href='admin.php'>Admin</a>");
						echo("</li>");	
		}}
		echo("</ul>");
		mysql_close($konekcija);
	
?>