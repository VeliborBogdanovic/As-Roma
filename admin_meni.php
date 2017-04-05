<?php
	include("konekcija.php");
	
	if(isset($_REQUEST['btnBrisi']))
	{
		$za_brisanje = $_POST['brisanje'];
		
		if(count($za_brisanje) != 0)
		{
			foreach($za_brisanje as $id)
			{
				$upit_b = "DELETE FROM meni WHERE id=".$id;
				mysql_query($upit_b) or die(mysql_error());
			}
		}
	}
	
	$upit_menu="SELECT * FROM meni";
	$rezultat_menu=mysql_query($upit_menu);
	echo "<h3><form method='post' action='' id='adminMenu'>
			<table border='1' style='margin-top:0px;'>
				<tr>
					<th>id</th>
					<th>Putanja</th>
					<th>Naziv</th>
					<th>Roditelj</th>
					<th>Obrisati</th>
				</tr>";
	while($r=mysql_fetch_array($rezultat_menu))
	{
		echo "<tr>
				<td>".$r['id']."</td>
				<td>".$r['href']."</td>
				<td>".$r['naziv']."</td>
				<td>".$r['roditelj']."</td>
				<td><input type='checkbox' name='brisanje[]' value='".$r['id']."'/></td>
				";
	}
	echo "</tr>
			<td colspan='6' align='center'>
				<input type='submit' name='btnBrisi' value='Obrisati'/>
				<input type='submit' name='btnDodaj' value='Dodaj'/>
			</td>
		</table>
	</form></h3>";
	
	
	if(isset($_REQUEST['btnDodaj']))
	{
		echo "
		<form method='post' action='' id='adminMenu'>
			<table  >
				<tr>
					<td><b style='color:#BBBBBB;' >Putanja:</b> </td><br/>
					<td>
					<input type='text' name='tbPromenljiva'/>
					</td>
				</tr>
				<tr>
					<td><b style='color:#BBBBBB;' >Naziv:</b> </td>
					<td>
					<input type='text' name='tbNaziv'/>
					</td>
				</tr>
				<tr>
					<td><b style='color:#BBBBBB;' >Roditelj</b> </td>
					<td>
					<input type='text' name='tbRoditelj'/>
					</td>
				</tr>
				<tr>
					<td>
					<input type='submit' value='Dodaj' name='insertBtn'/>
					</td>
				</tr>
			</table>
		</form>
		";
	}
	if(isset($_REQUEST['insertBtn']))
	{
			$upisPromenljiva=$_POST['tbPromenljiva'];
			$upisNaziv=$_POST['tbNaziv'];
			$upisRoditelj=$_POST['tbRoditelj'];
			$upit_insert = "INSERT INTO meni VALUES ('','$upisPromenljiva','$upisNaziv','$upisRoditelj')";
			mysql_query($upit_insert, $konekcija) or die(mysql_error());
	}
	mysql_close($konekcija);
?>