
<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <?php
      
    if ( empty($_POST['dateseance'])) {
    ?>
    <h2 class = "">Veuillez saisir une date pour la s&eacute;ance</h2>
    <?php
    } else {
    ?>
    <h2 class = "">S&eacute;ance programm&eacute; avec succ&egrave;s</h2>
    <?php
    }
    ?>
    

    </div>

    <div class = "form-group">
    <hr />
    </div>
  <?php
    if ( empty($_POST['dateseance'])) {
    ?>
    <a href = "?id=7&el=<?php echo $_GET['f'] ?>" >
    <?php
    } else {
    ?>
     <a href = "?id=8">
    <?php
    }
    ?>
    
      
    
        
        
    <img border = "0" src = "images/login/retour.png" style = "margin-left: 20px;width: 100px;height: 80px;">
    </a> <br/>
    
<table width="100%">
    <tr width="100%">
        <td align="center">
            <?php
            
                $filmID = $_GET['f'] ;

            
            if (
                    empty($_POST['dateseance'])
            ) {
//                echo "<p class=\"texte_12_bleu\">Veuillez saisir une date pour la seance !<br>";
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
             `fk_salle_id`, e_etat_event )
             
            VALUES (
                    '$dateseance',
                    '$heure',
                    '$minute',
                    '$seconde',
                    '$filmID',
                    '$salle','0')";

                mysql_query($sql);
                
                
               
            }
            ?>
        </td>
    </tr>
</table>