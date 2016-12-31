
<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <h2 class="">Détails sur la s&eacute;ance </h2>

</div>

<div class="form-group">
    <hr />
</div>
<br>

<?php


    

if (empty($_GET['el'])) 
	{$el = 0;}
	else
	{$el = $_GET['el'];}
        
        $seanceID = $el ;
        
 $sqlEvent = "SELECT e.`e_id`, f.`fl_image_film`, CONCAT(f.fl_lib,' en VF Numerique') AS fl_lib ,e.e_date_seance, 
CONCAT(
CASE
  WHEN  LENGTH(e.e_heure_seance)=1 THEN LPAD(e.e_heure_seance,2,'0')
  ELSE e.e_heure_seance
END

,':',
CASE
  WHEN  LENGTH(e.e_minute_seance)=1 THEN LPAD(e.e_minute_seance,2,'0')
  ELSE e.e_minute_seance
END
,':',
CASE
  WHEN  LENGTH(e.e_seconde_seance)=1 THEN LPAD(e.e_seconde_seance,2,'0')
  ELSE e.e_seconde_seance
END
) AS duree
FROM p_event e
JOIN p_film f ON f.fl_id = e.fk_film_id 
WHERE e.`e_id` = '$seanceID' 
";
 
// print_r($sqlFiche) ; exit ;
 
                $ReqDetailsEvent= mySQL_query($sqlEvent);
                /* Compte le nombre d'images qu'il va falloir afficher */
                $event = mysql_fetch_assoc($ReqDetailsEvent) ;
                
?>
<a href="?id=8">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>

<table width="100%"  style=" font: 18px verdana,  sans-serif, 'Times New Roman';">
	<tr width="100%">
		<!--<td width="25%" rowspan="5" colspan="1"><br /></td>-->
		<td width="25%" rowspan="5" colspan="1"><?php echo "<img border=\"0\" width=\"200\" height=\"200\" src=\"images/films/" . $event['fl_image_film']  . "\"><br>"  ?> <br /></td>
		<td width="25%" ><p class="texte_12_bleu">Film :</td>
		<td width="25%" ><?php echo ($event['fl_lib'] == '')?'-':$event['fl_lib']  ?> </td>
		<td width="25%"  rowspan="5" colspan="1"><br /></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Date de Seance:</td>
		<td><?php echo ($event['e_date_seance'] == '')?'-':$event['e_date_seance']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Heure de Seance :</td>
		<td><?php echo ($event['duree'] == '')?'-':$event['duree']  ?></td>
	</tr>
	
	<tr width="100%">
		<td><br /></td>
		<td><br /></td>
	</tr>
	
</table>
