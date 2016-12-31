
<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <h2 class="">Détails sur la fiche </h2>

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
        
        $filmId = $el ;
        
 $sqlFiche = "SELECT
  `fl_id`,
  `fl_lib`,
  `fl_desc`,
  `fl_motcle`,
  `fk_ge_id`,
  `fl_image_film`,
    `fi_titreVF`,
  `fi_titreVO`,
  `fi_annee_realisation`,
  `fi_nationalite`,
  `fi_duree`,
  `fi_notation`,
  `fi_date_sortie`,
  `fi_themes`,
  `fi_realisateur`,
  `fi_chef_operateur`,
  `fi_musique`,
  `fi_rens_complements`,
  `fi_scenario`,
  `fi_distribution`,
  `fi_visa_exploitation`,
  `fi_acteurs`,
  `fi_resume`
FROM `p_film` fi
INNER JOIN p_fiche f ON f.`fk_film_id` = fi.`fl_id`
WHERE   fk_film_id = '$filmId'
";
 
// print_r($sqlFiche) ; exit ;
 
                $ReqDetailsFiche = mySQL_query($sqlFiche);
                /* Compte le nombre d'images qu'il va falloir afficher */
                $film = mysql_fetch_assoc($ReqDetailsFiche) ;
                //$film = ;
                
//                var_dump($film) ;exit ;
                
?>
<a href="?id=5">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>

<table width="100%" style=" font: 18px verdana,  sans-serif, 'Times New Roman';">
	<tr width="100%">
		<!--<td width="25%" rowspan="5" colspan="1"><br /></td>-->
		<td width="25%" rowspan="5" colspan="1"><?php echo "<img border=\"0\" width=\"200\" height=\"200\" src=\"images/films/" . $film['fl_image_film']  . "\"><br>"  ?> <br /></td>
		<td width="25%" ><p class="texte_12_bleu">Titre VOST Francais :</td>
		<td width="25%" ><?php echo ($film['fi_titreVF'] == '')?'-':$film['fi_titreVF']  ?> </td>
		<td width="25%"  rowspan="5" colspan="1"><br /></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Titre VOST Original:</td>
		<td><?php echo ($film['fi_titreVO'] == '')?'-':$film['fi_titreVO']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Ann&eacute;e de R&eacute;alisation (YYYY) :</td>
		<td><?php echo ($film['fi_annee_realisation'] == '')?'-':$film['fi_annee_realisation']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Nationalit&eacute; :</td>
		<td><?php echo ($film['fi_nationalite'] == '')?'-':$film['fi_nationalite']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Dur&eacute;e :</td>
		<td><?php echo ($film['fi_duree'] == '')?'-':$film['fi_duree']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Notation :</td>
		<td><?php echo ($film['fi_notation'] == '')?'-':$film['fi_notation']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Date de Sortie (YYYY-MM-DD ):</td>
		<td><?php echo ($film['fi_date_sortie'] == '0000-00-00 00:00:00')?'-':$film['fi_date_sortie']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Th&egrave;mes :</td>
		<td><?php echo ($film['fi_themes'] == '')?'-':$film['fi_themes']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">R&eacute;alisateur :</td>
		<td><?php echo ($film['fi_realisateur'] == '')?'-':$film['fi_realisateur']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Chef Op&eacute;rateur:</td>
		<td><?php echo ($film['fi_chef_operateur'] == '')?'-':$film['fi_chef_operateur']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Musique:</td>
		<td><?php echo ($film['fi_musique'] == '')?'-':$film['fi_musique']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Renseignements Compl&eacute;mentaires:</td>
		<td><?php echo ($film['fi_rens_complements'] == '')?'-':$film['fi_rens_complements']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Sc&eacute;nario:</td>
		<td><?php echo ($film['fi_scenario'] == '')?'-':$film['fi_scenario']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Distribution:</td>
		<td><?php echo ($film['fi_distribution'] == '')?'-':$film['fi_distribution']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Visa Exploitation:</td>
		<td><?php echo ($film['fi_visa_exploitation'] == '')?'-':$film['fi_visa_exploitation']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">Acteurs:</td>
		<td><?php echo ($film['fi_acteurs'] == '')?'-':$film['fi_acteurs']  ?></td>
	</tr>
	<tr width="100%">
		<td><p class="texte_12_bleu">R&eacute;sum&eacute;:</td>
		<td><?php echo ($film['fi_resume'] == '')?'-':$film['fi_resume']  ?>
                </td>
	</tr>
	<tr width="100%">
		<td><br /></td>
		<td><br /></td>
	</tr>
	
</table>

<?php

echo " <br>&nbsp;<br>";
    

?>