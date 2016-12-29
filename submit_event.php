<table width="100%">
    <tr width="100%">
        <td align="center">
            <?php
            
            $filmID = $_GET['f'] ;
            
            if (
                    empty($_POST['dateseance'])
            ) {
                echo "<p class=\"texte_12_bleu\">Veuillez saisir une date pour la seance !<br>";
            } else {

                $dateseance = $_POST['dateseance'];
                $salle = $_POST['salle'];
                $heure = $_POST['heure'];
                $minute = $_POST['minute'];
                $seconde = $_POST['seconde'];
                
               
               

//                if ($datesortie == '') {
//                    $datesortie = 'null';
//                }
                
                $sql = "INSERT INTO `p_event`
            (
             `e_date_seance`,
             `e_heure_seance`,
             `e_minute_seance`,
             `e_seconde_seance`,
             `fk_film_id`,
             `fk_salle_id`)
             
            VALUES (
                    '$dateseance',
                    '$heure',
                    '$minute',
                    '$seconde',
                    '$filmID',
                    '$salle')";

                mysql_query($sql);
                
                
                echo "<p class=\"texte_12_bleu\"> La s&eacute;ance a &eacute;t&eacute; enr&eacute;gistr&eacute;e avec succ&egrave;s !";
                echo " <br>&nbsp;<br>
        <a href=\"?id=8\"><br>&nbsp;<br>Aller &agrave la liste des s&eacute;ances </a>
";
            }
            ?>
        </td>
    </tr>
</table>