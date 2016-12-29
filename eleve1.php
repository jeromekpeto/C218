<?php
/* Liste les élèves qui n'ont pas d'emprunt en cours */
$SQL = "SELECT ele.id_eleve, ele.nom_eleve, ele.prenom_eleve, ele.image_eleve FROM bibli_eleve ele left join
(select id_eleve from bibli_emprunt where dt_retour is null) lst on ele.id_eleve = lst.id_eleve 
where lst.id_eleve is null order by ele.prenom_eleve, ele.nom_eleve";
$Req = mySQL_query($SQL);
/* Compte le nombre d'images qu'il va falloir afficher */
$NbImage = mySQL_num_rows($Req);

$k=0;
/* Création d'une variable contenant les données issues de la requête : l'action liée à l'image et à l'élève */
while ($val = mySQL_fetch_array($Req)) 
  /* Test s'il existe une image ou pas s'il n'y a pas d'image le nom est écrit plus gros */
  {if (empty($val['image_eleve']))
  {$tableau[$k] = "<a border=\"0\" class=\"lien2\" href=\"?id=1&el=".$val['id_eleve']."\">".$val['prenom_eleve']."<br>".$val['nom_eleve']."</a>";}
  else
  {$tableau[$k] = "<a border=\"0\" class=\"lien1\" href=\"?id=1&el=".$val['id_eleve']."\"><img border=\"0\" src=\"eleve/".$val['image_eleve'].".png\"><br>".$val['prenom_eleve']." ".$val['nom_eleve']."</a>";}
  $k++;}

/* Indique le nombre de colonne que l'on veut dans le tableau */$NbrCol = 7;

/* Le code qui suit permet de mettre les données de la variable précédente dans un tableau */
$NbLigne = 0;
if ($NbImage != 0) 
   {$k = 0;
   /* Création d'u tableau */
   echo "<table border=\"1\" BORDERCOLOR=\"0000CD\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">";
   while ($k < $NbImage) 
      /* Création d'une ligne */
      {if (($k+1)%$NbrCol == 1) 
        {$NbLigne++;
        echo "<tr align=\"center\"  width=\"100%\">";
        $FinLig = 0;}
      /* Création des colonnes et insérer les valeurs */
      echo "<td width=\"".(100/$NbrCol)."%\" align=\"center\">";
      echo $tableau[$k];
      echo "</td>";
      /* Fermeture de la ligne quand le nb de colonne est atteint */
      if (($k+1)%$NbrCol == 0) 
        {echo "</tr>"; 
        $FinLig = 1;}
      $k++;}
    /* Ferme la ligne si cela n'est pas fait */
    if ($FinLig!=1) {echo "</tr>";}
    /* Ferme le tableau */
    echo "</table>";}
    /* S'il n'y a rien à afficher on affiche une image de vide */
    else 
    {echo "<table width=\"100%\"><tr><td align=\"center\"><img border=\"0\" src=\"images/vide.gif\"></td></tr></table>";}
?>