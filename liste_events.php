<?php


/* Liste des films */
$SQL = "

SELECT e.`e_id`, CONCAT(f.fl_lib,' en VF Numerique') AS fl_lib ,e.e_date_seance, 
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
ORDER BY f.fl_id   ";



$Req = mySQL_query($SQL);


//print_r($Req) ;exit ;
//print_r(mySQL_fetch_array($Req)) ;exit ;

/* Compte le nombre de films quil va falloir  afficher */
$NbSeances = mySQL_num_rows($Req);

$k = 0;

while ($val = mySQL_fetch_array($Req))
/* Test s'il existe une image ou pas  */ {
        $tableau[$k] = "<br><a border=\"0\" class=\"lien1\" href=\"?id=8&el=" . $val['e_id'] . " \">". $val['fl_lib']."<br><img border=\"0\" width=\"100\" height=\"100\" src=\"images/events/event.png\"><br>" . $val['duree'] . "<br><br></a>";
    $k++;
}

echo " <br>&nbsp;<br>
        <a href=\"?id=2\"><br>&nbsp;<br>Retour &agrave; la page des seances</a>
";
echo " <br>&nbsp;<br>";
    
/* Indique le nombre de colonne que l'on veut dans le tableau */$NbrCol = 4;

$NbLigne = 0;
if ($NbSeances != 0) {
    $k = 0;
    /* Cr�ation d'u tableau */
    echo "<table border=\"1\" BORDERCOLOR=\"0000CD\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">";
    while ($k < $NbSeances)
    /* Cr�ation d'une ligne */ {
        if (($k + 1) % $NbrCol == 1) {
            $NbLigne++;
            echo "<tr align=\"center\"  width=\"100%\">";
            $FinLig = 0;
        }
        /* Cr�ation des colonnes et ins�rer les valeurs */
        echo "<td width=\"" . (100 / $NbrCol) . "%\" align=\"center\">";
        echo $tableau[$k];
        echo "</td>";
        /* Fermeture de la ligne quand le nb de colonne est atteint */
        if (($k + 1) % $NbrCol == 0) {
            echo "</tr>";
            $FinLig = 1;
        }
        $k++;
    }
    /* Ferme la ligne si cela n'est pas fait */
    if ($FinLig != 1) {
        echo "</tr>";
    }
    /* Ferme le tableau */
    echo "</table>";
}
/* S'il n'y a rien a afficher on affiche une image de vide */ else {
    echo "<table width=\"100%\"><tr><td align=\"center\"><img border=\"0\" src=\"images/vide.gif\"></td></tr></table>";
}
echo " <br>&nbsp;<br>
        <a href=\"?id=2\"><br>&nbsp;<br>Retour &agrave; la page des Seances</a>
";
?>