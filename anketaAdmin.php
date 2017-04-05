<?php
	include("konekcija.php");
?>

<form name="ankete" method="POST" action="" id="anketePhp">
	
	<b style="color:#B30000;">Unesite pitanje:</b><br/> <input type="text" size="22" name="pitanje"><br><br><b style="color:#B30000;">
	Odgovori(posle svakog ";" osim iza poslednjeg):</b><br/>
	<textarea name="odgovori" cols="25"></textarea><br/><br/>
	<input type="submit" value="Unesi" name="unesi"/><br><br>
	
</form>


<form name="aktivnost" method="POST" action="" id="anketePhp">

	<h2 style="color:#BBBBBB;font-size:15px;">Postavi anketu za aktivnu</h2><br/><b style='color:#B30000;'>
	
	Izaberu anketu:</b><br/>
	<select name="aktivnost_ankete" style="width:120px;">
		<option >Izaberite...</option>
		<?php
			$upit="select * from ankete";
			$rezultat=mysql_query($upit) or die("Upit 1 nije izvrsen!".mysql_error());
			
			while($niz=mysql_fetch_array($rezultat))
			{
				echo "<option value='".$niz['id_ankete']."'>".$niz['pitanje']."</option>";
			}
		?>
	</select>
	<input type="submit" value="Aktiviraj" name="aktiviraj"><br>

</form>

<?php
	$dugme_upis=@$_POST['unesi'];
	$dugme_aktiviraj=@$_POST['aktiviraj'];
	if(isset($dugme_upis))
	{
		$pitanje=$_POST['pitanje'];
		$odgovori=$_POST['odgovori'];
		$niz_odgovori=explode(';',$odgovori);
		$broj=count($niz_odgovori); 
		$upis_pitanje="insert into ankete values('','$pitanje',0)";
		$izvrsi_upit_pitanje=mysql_query($upis_pitanje,$konekcija)or die(mysql_error());
		$izvuciID="select id_ankete from ankete where pitanje='$pitanje'";
		$izvrsi_izvuciID=mysql_query($izvuciID, $konekcija)or die("Upit 3 nije dobar!".mysql_error());
		$red=mysql_fetch_array($izvrsi_izvuciID);
		$id_ankete=$red['id_ankete'];
		for($i=0;$i<$broj;$i++)
		{
			$upis_odgovora="INSERT INTO odgovori VALUES('','$id_ankete','$niz_odgovori[$i]')";
			$upisi=mysql_query($upis_odgovora) or die("Upit 3 mije izvrsen!".mysql_error());
			$id_odgovor="select id_odgovori from odgovori where id_ankete='$id_ankete' and odgovori='$niz_odgovori[$i]'";
			$uzmi_id_odgovor=mysql_query($id_odgovor)or die("Upit 4 nije izvrsen!".mysql_error());
			$niz_id_odgovor=mysql_fetch_array($uzmi_id_odgovor);
			$id_odgovor=$niz_id_odgovor[0];
			$upis_rezultati="insert into rezultat values('','$id_ankete','$id_odgovor',0)";
			$upis=mysql_query($upis_rezultati,$konekcija)or die("Upit 5 nije izvrsen!".mysql_query());
		}
		
		if($upis)
		{
			echo 'Anketa je upisana!';
		}
	}
	
	if(isset($dugme_aktiviraj))
	{
		$aktivnost=$_POST['aktivnost_ankete'];
		$aktiviraj="update ankete set aktivna=1 where id_ankete=".$aktivnost;
		$deaktiviraj="update ankete set aktivna=0 where id_ankete<>".$aktivnost;
		$izvrsi_deaktiviraj=mysql_query($deaktiviraj,$konekcija)or die("Upit 6 nije izvrsen!".mysql_error());
		$izvrsi_aktiviraj=mysql_query($aktiviraj,$konekcija)or die("Upit 7 nije izvrsen!".mysql_error());
		if($izvrsi_aktiviraj)
		{
			echo "Anketa je uspešno aktivirana!";
		}
	}
	mysql_close($konekcija);
?>