

<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <?php
    if (empty($_POST['tvof']) or empty($_POST['tvo'])) {
    ?>
    <h2 class = "">Veuillez renseigner le titre du Film </h2>
    <?php
    } else {
    ?>
      <h2 class = "">Film Publi&eacute; avec succ&egrave;s</h2>
    <?php
    }
    ?>
    

    </div>

    <div class = "form-group">
    <hr />
    </div>
  <?php
    if (empty($_POST['tvof']) or empty($_POST['tvo'])) {
    ?>
    <a href = "?id=4">
    <?php
    } else {
    ?>
     <a href = "?id=6">
    <?php
    }
    ?>
    
      
    
        
        
    <img border = "0" src = "images/login/retour.png" style = "margin-left: 20px;width: 100px;height: 80px;">
    </a> <br/>

    <table width = "100%">
    <tr width = "100%">
    <td align = "center">
    <?php
    if (
    empty($_POST['tvof'])
    or empty($_POST['tvo'])
    ) {
//    echo "<p class=\"texte_12_bleu\">Veuillez saisir un des titres du film !<br>";
    } else {

//                var_dump($_POST);

        $tvof = $_POST['tvof'];
        $tvo = $_POST['tvo'];
        $anneerea = $_POST['anneerea'];
        $nationalite = $_POST['nationalite'];
        $duree = $_POST['duree'];
        $notation = $_POST['notation'];
        if ($notation == '') {
            $notation = 0;
        }

        $datesortie = $_POST['datesortie'];

//                var_dump($datesortie == '') ; exit ;
        if ($datesortie == '') {
            $datesortie = 'null';
        }
        $themes = $_POST['themes'];
        $realisateur = $_POST['realisateur'];
        $chef_operateur = $_POST['chef_operateur'];
        $musique = $_POST['musique'];
        $rens_compl = $_POST['rens_compl'];
        $scenario = $_POST['scenario'];
        $distribution = $_POST['distribution'];
        $visa_exploitation = $_POST['visa_exploitation'];
        $acteurs = $_POST['acteurs'];
        $resume = $_POST['resume'];
        $photo_film = $_POST['photo_film'];

        if ($photo_film == '') {
            $photo_film = 'SANS_IMAGE.png';
        }

//                if (empty($_POST['image'])) {
//                    $image = null;
//                } else {
//                    $image = $_POST['image'];
//                }

        $sql = "INSERT INTO `p_film`
            (
             `fl_lib`,
             `fl_desc`,
             `fl_motcle`,
             `fk_ge_id`,fl_image_film, fl_etat_film )
VALUES (
        '$tvof',
        '$resume',
        '',
        '1','$photo_film','0')";

//                print_r($sql) ; exit ;
        mysql_query($sql);


        // Selectionner le dernier Film insere pour enregistrer la fiche
        $SQL_ID = "SELECT
                        MAX(`fl_id`) AS fl_id
                        FROM `p_film`
                      ";
        $Req_ID = mySQL_query($SQL_ID);
        /* Compte le nombre d'images qu'il va falloir afficher */
        $Nbresults = mySQL_num_rows($Req_ID);
        $valeur_ID = mysql_fetch_row($Req_ID);

//                var_dump($valeur_ID[0]) ; exit ;

        $last_film_id = ($Nbresults == 0) ? 1 : $valeur_ID[0];

        $sql_fiche = "

INSERT INTO `p_fiche`
            (
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
             `fi_resume`,
             `fk_film_id`)
VALUES (
        '$tvof',
        '$tvo',
        '$anneerea',
        '$nationalite',
        '$duree',
        $notation,";
        ($datesortie == 'null') ? $sql_fiche.=$datesortie : $sql_fiche.="'" . $datesortie . "'";
        $sql_fiche .=",'$themes',
        '$realisateur',
        '$chef_operateur',
        '$musique',
        '$rens_compl',
        '$scenario',
        '$distribution',
        '$visa_exploitation',
        '$acteurs',
        '$resume',
        '$last_film_id')";

//                print_r($sql) ; exit ;
        mysql_query($sql_fiche);
        echo "<p class=\"texte_12_bleu\">Fiche du film de titre <b>'$tvo'</b> a &eacute;t&eacute; enr&eacute;gistr&eacute;e avec succ&egrave;s !";
        echo " <br>&nbsp;<br>
        <a href=\"?id=5\"><br>&nbsp;<br>Aller &agrave la liste des films</a>
";
//                <a href=\"?id=1\"><img border=\"0\" width=\"200\" height=\"200\" src=\"images/saisir_fiche.png\"><br>&nbsp;<br>Retour &agrave; la page des Films</a>
    }
    ?>
</td>
</tr>
</table>