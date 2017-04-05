<div id="adminKorisnici">
<?php
	include("konekcija.php");
	
	if(isset($_REQUEST['btnBrisiIgraca']))
	{
		$za_brisanje = $_REQUEST['brisanjeIgrac'];
		
		if(count($za_brisanje) != 0)
		{
			foreach($za_brisanje as $id)
			{
				$upit_b = "DELETE FROM igraci WHERE id_igrac=".$id;
				mysql_query($upit_b, $konekcija) or die(mysql_error());
			}
		}
	}
	
	$upit_igrac="SELECT * FROM igraci";
	$rezultat_igraci=mysql_query($upit_igrac);
	echo "<h3><form method='post' action=''>
			<table border='1'>
				<tr>
					<th>id</th>
					<th>Ime</th>
					<th>Prezime</th>
					<th>Godine</th>
					<th>Pozicija</th>
					<th>Obrisati</th>
				</tr>";
	while($r=mysql_fetch_array($rezultat_igraci))
	{
		echo "<tr>
				<td>".$r['id_igrac']."</td>
				<td>".$r['ime']."</td>
				<td>".$r['prezime']."</td>
				<td>".$r['godine']."</td>
				<td>".$r['pozicija']."</td>
				<td><input type='checkbox' name='brisanjeIgrac[]' value='".$r['id_igrac']."'/></td>
				";
	}
	echo "</tr>
			<td colspan='9' align='center'>
				<input type='submit' name='btnBrisiIgraca' value='Obrisati'/>
				<input type='submit' name='btnDodajIgraca' value='Dodaj'/>
			</td>
		</table>
	</form></h3>";
	
	
	if(isset($_REQUEST['btnDodajIgraca']))
	{
		echo "
		<form method='post' action='' id='adminMenu'>
			<table>
				<tr>
					<td><b style='color:#BBBBBB;' >Ime </b></td><br/>
					<td>
					<input type='text' name='tbIme'/>
					</td>
				</tr>
				<tr>
					<td><b style='color:#BBBBBB;' >Prezime </b></td>
					<td>
					<input type='text' name='tbPrezime'/>
					</td>
				</tr>
				<tr>
					<td><b style='color:#BBBBBB;' >Godine </b></td>
					<td>
					<input type='text' name='tbGodine'/>
					</td>
				</tr>
				<tr>
					<td><b style='color:#BBBBBB;' >Pozicija </b></td>
					<td>
					<input type='text' name='tbPozicija'/>
					</td>
				</tr>
				
				<tr>
					<td>
					<input type='submit' value='Dodaj' name='insertBtnIgraca'/>
					</td>
				</tr>
			</table>
		</form>
		";
	}
	if(isset($_REQUEST['insertBtnIgraca']))
	{
			$Ime=$_POST['tbIme'];
			$prezime=$_POST['tbPrezime'];
			$godine=$_POST['tbGodine'];
			$pozicija=$_REQUEST['tbPozicija'];

			$upit_insert = "INSERT INTO igraci(ime,prezime,godine,pozicija) VALUES ('$Ime','$prezime','$godine','$pozicija')";
			mysql_query($upit_insert, $konekcija) or die(mysql_error());
	}
	mysql_close($konekcija);
?>
</div>