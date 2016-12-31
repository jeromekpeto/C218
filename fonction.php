<?php

/* Fonction donnant le mois en francais */

function mois_fr($mois) {
    switch ($mois) {
        case 1:
            $mois = "janvier";
            break;
        case 2:
            $mois = "fevrier";
            break;
        case 3:
            $mois = "mars";
            break;
        case 4:
            $mois = "avril";
            break;
        case 5:
            $mois = "mai";
            break;
        case 6:
            $mois = "juin";
            break;
        case 7:
            $mois = "juillet";
            break;
        case 8:
            $mois = "aout";
            break;
        case 9:
            $mois = "septembre";
            break;
        case 10:
            $mois = "octobre";
            break;
        case 11:
            $mois = "novembre";
            break;
        case 12:
            $mois = "decembre";
            break;
    };
    return $mois;
}

/* Fonction donnant le jour en fran�ais */

function jour_fr($jour) {
    switch ($jour) {
        case 0:
            $jour = "dimanche";
            break;
        case 1:
            $jour = "lundi";
            break;
        case 2:
            $jour = "mardi";
            break;
        case 3:
            $jour = "mercredi";
            break;
        case 4:
            $jour = "jeudi";
            break;
        case 5:
            $jour = "vendredi";
            break;
        case 6:
            $jour = "samedi";
            break;
    };
    return $jour;
}

/* Fonction donnant la date sous la forme suivant 2 mai 2011 */

function date_fr($val_date) {
    list($annee, $mois, $jour) = explode('-', $val_date);
    $datefr = $jour . ' ' . mois_fr($mois) . ' ' . $annee;
    return $datefr;
}

/* Fonction donnant la date sous la forme suivant lundi 2 mai 2011 */

function jourdate_fr($val_date) {
    list($annee, $mois, $jour, $nb_jour) = explode('-', $val_date);
    $jourdatefr = jour_fr($nb_jour) . ' ' . $jour . ' ' . mois_fr($mois) . ' ' . $annee;
    return $jourdatefr;
}

?>