
<span id="leftimage" >
    <a href="?id=100" ><img border="0" width="200px" height="100px;" style=" margin-top: 0px;margin-left: 1700px;margin-bottom: 0px" src="images/login/miage.jpeg"></a> <br>
</span>
<div align ="center" style="margin-top: -70px" >
    <h2 class="">Liste des Utilisateurs</h2>

</div>

<div class="form-group">
    <hr />
</div>
<br>

<?php

/* Liste des films */
$SQL = "select 	iduser, username, password, roleuser, nom, prenom 
	from 
	user  ";
$Req = mySQL_query($SQL);

/* Compte le nombre de films quil va falloir  afficher */
$NbUsers = mySQL_num_rows($Req);

$k = 0;

while ($val = mySQL_fetch_array($Req))
/* Test s'il existe une image ou pas  */ {
        $tableau[$k] = "<a border=\"0\" class=\"lien2\" href=\"#\"><img border=\"0\" width=\"100\" height=\"100\" src=\"images/users/user.png\" ><br>" . $val['nom'] .' '.$val['prenom']. "<br></a>";
//        $tableau[$k] = "<a border=\"0\" class=\"lien2\" href=\"?id=300&el=" . $val['iduser'] . "\"><img border=\"0\" width=\"100\" height=\"100\" src=\"images/users/user.png\" ><br>" . $val['nom'] .' '.$val['prenom']. "<br></a>";
    $k++;
}



/* Indique le nombre de colonne que l'on veut dans le tableau */$NbrCol = 4;
?>
<a href="?id=3">
    <img border="0" src="images/login/retour.png" style="margin-left: 20px;width: 100px;height: 80px;">
</a> <br/>
<?php 
$NbLigne = 0;
if ($NbUsers != 0) {
    $k = 0;
    /* Cr�ation d'u tableau */
    echo "<table border=\"1\" BORDERCOLOR=\"0000CD\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">";
    while ($k < $NbUsers)
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

?>