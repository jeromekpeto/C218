<?php
//Lance la connexion avec la base donnes
include "../connection.php";
            /* Liste des films */
            $SQL = "SELECT
  `fl_id`,
  `fl_lib`,
  `fl_desc`,
  `fl_motcle`,
  `fk_ge_id`,fl_image_film
FROM `p_film` where fl_etat_film = 2 ";
            $Req = mySQL_query($SQL);

            /* Compte le nombre de films quil va falloir  afficher */
            $NbFilms = mySQL_num_rows($Req);
            

            $k = 0;

            while ($val = mySQL_fetch_array($Req))
            /* Test s'il existe une image ou pas  */ {
                if (empty($val['fl_image_film'])) {
                    $tableau[$k] = " 
        <a href=\"?id=5&el=".$val['fl_id'] ."\" style=\"text-align: left\">
          <img border=\"0\"  width=\"250\" height=\"250\"  src=\"../images/films/film1.png\">
      </a> ";
                } else {
                     $tableau[$k] = " 
        <a href=\"?id=5&el=".$val['fl_id'] ."\" style=\"text-align: left\">
            <img border=\"0\" width=\"250\" height=\"250\" src=\"../images/films/" . $val['fl_image_film'] . "\">

      </a> ";
                     
           }
                $k++;
            }

          

            /* Indique le nombre de colonne que l'on veut dans le tableau */$NbrCol = 4;

            $NbLigne = 0;
            if ($NbFilms != 0) {
                $k = 0;
                while ($k < $NbFilms)
                /* Cr�ation d'une ligne */ {
                    
                    if (($k + 1) % $NbrCol == 1) {
                        $NbLigne++;
                        $FinLig = 0;
                    }


                    /* Cr�ation des colonnes et ins�rer les valeurs */

        echo $tableau[$k];
                    /* Fermeture de la ligne quand le nb de colonne est atteint */
                    if (($k + 1) % $NbrCol == 0) {
                        echo "<br>";
                        $FinLig = 1;
                    }
                    $k++;
                }
            }
            /* S'il n'y a rien a afficher on affiche une image de vide */ else {
                echo "Aucun Film a laffiche !";
            }
            ?> 