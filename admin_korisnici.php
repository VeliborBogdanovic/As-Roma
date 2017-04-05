

<?php
			include("konekcija.php");
			
			if(isset($_REQUEST['btnBrisi']))
			{
				$za_brisanje = $_REQUEST['Brisanjecb'];
				
				if(count($za_brisanje) != 0)
				{
					foreach($za_brisanje as $id)
					{
						$upit_b = "DELETE FROM korisnici WHERE id=".$id;
						mysql_query($upit_b);
					}
				}
				
			}
			
			
			$upit = "SELECT * FROM korisnici";
			$rez = mysql_query($upit);
			if(mysql_num_rows($rez)==0)
			{
				echo("Baza je prazna");
			}
			else
			{
				?>
				<h3>
				<table border="1" style='margin-top:-10px;'>
				<form action="" method="POST">
						<tr>
							<th>User</th>
							<th>Password</th>
							<th>Adresa</th>
							<th>Mail</th>
							<th>Broj</th>
							<th>Uloga</th>
							<th>Brisanje</th>
						</tr>
			<?php
			while($r=mysql_fetch_array($rez))
				{
					echo("
						<tr>
							<td>".$r['user']."</td>
							<td>".$r['pass']."</td>
							<td>".$r['adresa']."</td>
							<td>".$r['email']."</td>
							<td>".$r['broj']."</td>
							<td>".$r['uloga']."</td>
							<td><input type='checkbox' name='Brisanjecb[]' value='".$r['id']."'/></td>
						</tr>
					");
				}
				echo("
					<tr>
						<td colspan='7' align='center'>
							<input type='submit' name='btnBrisi' value='Obrisati'/>
						</td>
					</tr>
					</form>
					</table>
					</h3>
				");
			}
			mysql_close($konekcija);
?>
