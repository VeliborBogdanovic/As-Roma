<html><body><?php
$koliko_po_strani = 5;
if(isset($_GET['skriveno'])) {$skriveno = $_GET['skriveno'];}
else {$skriveno = 0;}
include ("konekcija.php");
$upit = mysql_query("SELECT count(id_igrac) from igraci");
$niz = mysql_fetch_array($upit);
$ukupno_zapisa = $niz[0];

$levo = $skriveno - $koliko_po_strani;
$desno = $skriveno + $koliko_po_strani;
// Zaglavlje tabele sa navigacijom
echo ("<table width='150px' border='1' cellpadding='0' cellspacing='0' id='tabela'>");
echo ("<tr><td colspan='4' id='veliko' >Seria A</td>
		
		</tr>
		
		<tr style='background: #400000; color: #BBBBBB;'>
          <td><strong>#</strong></td>
          <td><strong>Tim</strong></td>
          <td><strong>Odigrano</strong></td>
          <td><strong>Poeni</strong></td>
        </tr>");

$rezultat = mysql_query("SELECT * FROM seria LIMIT $koliko_po_strani OFFSET
$skriveno ");
while($niz1 = mysql_fetch_array($rezultat))
{
echo ("<tr class='ostali'><td>". $niz1['id_tim']."</td><td>". $niz1['tim']."</td><td>". $niz1['odigrano']."</td><td>". $niz1['poeni']."</td> </tr>");
}
echo "</table>";
if($levo<0)
{echo (" <b style='color:#B30000;margin-left:10px'>Pocetak</b> </td><td width=\"50px\"><a href=\"index.php?skriveno=$desno\"> <b style='color:#B30000;margin-left:20px'>Narednih 5</b>
</a>");}
elseif($desno > $ukupno_zapisa)
{echo (" <a href=\"index.php?skriveno=$levo\" > <b style='color:#B30000;margin-left:10px'>Predhodnih 5 </b></a></td><td  width=\"50px\"> <b style='color:#B30000;margin-left:70px'>Kraj</b>
 </td> ");}

else {
echo ("<a href=\"index.php?skriveno=$levo\"> <b style='color:#B30000;margin-left:10px'>Predhodnih 5 </b></a></td>
<td width=\"50px\"><a href=\"index.php?skriveno=$desno\"> <b style='color:#B30000;margin-left:20px'>Narednih 5</b> </a>");}
echo ("</td></tr>");
?>

</body>
</html>
