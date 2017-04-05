<div id="adminKorisnici">
<?php
	include("konekcija.php");
	
	if(isset($_REQUEST['btnBrisiTim']))
	{
		$za_brisanje = $_REQUEST['brisanjeTim'];
		
		if(count($za_brisanje) != 0)
		{
			foreach($za_brisanje as $id)
			{
				$upit = "DELETE FROM seria WHERE id_tim=".$id;
				mysql_query($upit, $konekcija) or die(mysql_error());
			}
		}
	}
	
	$upit_tim="SELECT * FROM seria";
	$rezultat_tim=mysql_query($upit_tim);
	echo "<h3><form method='post' action='' >
			<table border='1'>
				<tr>
					<th>id</th>
					<th>Tim</th>
					<th>Odigrano</th>
					<th>Poeni</th>
					<th>Obrisati</th>
				</tr>";
	while($r=mysql_fetch_array($rezultat_tim))
	{
		echo "<tr>
				<td>".$r['id_tim']."</td>
				<td>".$r['tim']."</td>
				<td>".$r['odigrano']."</td>
				<td>".$r['poeni']."</td>
				<td><input type='checkbox' name='brisanjeTim[]' value='".$r['id_tim']."'/></td>
				";
	}
	echo "</tr>
			<td colspan='9' align='center'>
				<input type='submit' name='btnBrisiTim' value='Obrisati'/>
				<input type='submit' name='btnDodajTim' value='Dodaj'/>
			</td>
		</table>
	</form></h3>";
	
	
	if(isset($_REQUEST['btnDodajTim']))
	{
		echo "
		<form method='post' action='' id='adminMenu'>
			<table>
				<tr>
					<td><b style='color:#BBBBBB;' >Tim </b></td><br/>
					<td>
					<input type='text' name='tbTim'/>
					</td>
				</tr>
				<tr>
					<td><b style='color:#BBBBBB;' >Odigrano </b></td>
					<td>
					<input type='text' name='tbOdigrano'/>
					</td>
				</tr>
				<tr>
					<td><b style='color:#BBBBBB;' >Poeni</b></td>
					<td>
					<input type='text' name='tbPoeni'/>
					</td>
				</tr>
				<tr>
					<td>
					<input type='submit' value='Dodaj' name='insertBtnTim'/>
					</td>
				</tr>
			</table>
		</form>
		";
	}
	if(isset($_REQUEST['insertBtnTim']))
	{
			$tim=$_POST['tbTim'];
			$odigrano=$_POST['tbOdigrano'];
			$poeni=$_POST['tbPoeni'];
		

			$upit_insert = "INSERT INTO seria(tim,odigrano,poeni) VALUES ('$tim','$odigrano','$poeni')";
			mysql_query($upit_insert, $konekcija) or die(mysql_error());
	}
	mysql_close($konekcija);
?>
</div>