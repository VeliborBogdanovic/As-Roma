<?php 
	
	include("konekcija.php");
	if(isset($_GET['pozicija'])){
		
		$pozicija=$_GET['pozicija'];
		$upit="SELECT * FROM igraci WHERE pozicija='$pozicija'";
		
		$rez=mysql_query($upit) or die ("upit los");
		echo("<table  border='4'  style='margin:20px auto;text-align:center;margin-top:50px;margin-right:354px;position:absolute;z-index:2;font-size:17px;'> 
					<tr>
					<th>Ime</th>
					<th>Prezime</th>
					<th>Godine</th>
					<th>Pozicija</th>
					</tr> ");
		
	
		while($red=mysql_fetch_array($rez)){
			echo("<tr>");
			echo("<td>".$red['ime']."</td>");
			echo("<td>".$red['prezime']."</td>");
			echo("<td>".$red['godine']."</td>");
			echo("<td>".$red['pozicija']."</td>");
			echo("</tr>");
			
		}
		echo("</table>");
		}
		
		mysql_close($konekcija);
?>