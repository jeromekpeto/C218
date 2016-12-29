<?php
//Lance la connexion avec la base donnes
include "connection.php";
//include "fonction.php";

//Paramtrage permettant de rcuprer les donnes pour savoir sur quelle page on doit aller
//id => donne la page  afficher 
//		1 : emprunt
//		2 : retour
//el => donne l'id de l'lve
//il => donne l'id du livre
if (empty($_GET['id'])) 
	{$id = 0;}
	else
	{$id = $_GET['id'];}
if (empty($_GET['el'])) 
	{$el = 0;}
	else
	{$el = $_GET['el'];}
if (empty($_GET['li'])) 
	{$li = 0;}
	else
	{$li = $_GET['li'];}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<link rel="stylesheet" type="text/css" href="styles.css" />
<title>Application de Gestion de Films</title>
</head>
<body>
<!-- Cration d'un tableau pour positionner le corps au milieu de la page -->
	<table BORDER="0" CELLPADDING="0" CELLSPACING="0" >
		<tr width="100%" align="center">
			<!-- Partie Gauche -->
			<td width="50%">
			</td>
			<!-- Cration du contenu de la page -->
			<td align="center">
				<!-- Entete de la Page daccueil -->
				<div id="bandeau">
					<?php echo "Vendredi ,le 16 decembre 2016" ;// echo "Le ".jourdate_fr(date('Y-m-d-w'));?>
					<br>&nbsp;<br>
					<a href="?"><img border="0" src="images/accueil.png"></a>&nbsp;
				</div>
				<!-- Corps  -->
				<div id="contenu">
                                    <!--  Page a Afficher-->
                                    <?php
                                    switch ($id)
                                    /* affiche la page d'accueil */ {
                                        case 0:
                                            include 'accueil.php';
                                            break;
                                        /* affiche la page de programmation de Film */
                                        case 1:
                                            switch ($el)
                                            /* affiche la liste des Films  */ {
                                                case 0:
                                                    include 'page_films.php';
                                                    break;
//                                                default:
//                                                    switch ($li) {/* affiche la liste de livres disponibles */
//                                                        case 0:
//                                                            include 'livre1.php';
//                                                            break;
//                                                        /* indique que le livre a t emprunt */
//                                                        default:
//                                                            include 'emprunt1.php';
//                                                            break;
//                                                    }
//                                                    break;
                                            }
                                            break;
//                                        /* affiche la page de programmation des evenements */
                                        case 2:
                                            switch ($el) {
                                            
                                            /* affihce la liste des evenemnts deja programmees */
                                            
                                                case 0:
                                                    include 'page_events.php';
                                                    break;
//                                                default:
//                                                    switch ($li) {/* affiche la liste du livre emprunt */
//                                                        case 0:
//                                                            include 'livre2.php';
//                                                            break;
//                                                        /* indique que le livre a t retourn */
//                                                        default:
//                                                            include 'retour2.php';
//                                                            break;
//                                                    }
//                                                    break;
                                            }
                                            break;   
                                        case 3:
                                            switch ($el) {
                                            
                                            /* affihce la liste des evenemnts deja programmees */
                                            
                                                case 0:
                                                    include 'page_users.php';
                                                    break;
//                                                default:
//                                                    switch ($li) {/* affiche la liste du livre emprunt */
//                                                        case 0:
//                                                            include 'livre2.php';
//                                                            break;
//                                                        /* indique que le livre a t retourn */
//                                                        default:
//                                                            include 'retour2.php';
//                                                            break;
//                                                    }
//                                                    break;
                                            }
                                            break;   
												
											
                                            // Pour gerer la saisie des films
                                            case 4:
                                            switch ($el) {
                                            
                                            /* affihce la liste des evenemnts deja programmees */
                                            
                                                case 0:
                                                    include 'saisie_fiche.php';
                                                    break;
                                                case 1:
                                                    include 'submit_fiche.php';
                                                    break;
//                                                default:
//                                                    switch ($li) {/* affiche la liste du livre emprunt */
//                                                        case 0:
//                                                            include 'livre2.php';
//                                                            break;
//                                                        /* indique que le livre a t retourn */
//                                                        default:
//                                                            include 'retour2.php';
//                                                            break;
//                                                    }
//                                                    break;
                                            }
                                            break;
                                            case 5:
                                            switch ($el) {
                                            
                                            /* affihce la liste des evenemnts deja programmees */
                                            
                                                case 0:
                                                    include 'liste_films.php';
                                                    break;
                                                default:
                                                    include 'details_fiche.php';
                                                    break;
                                                
                                            }
                                            break;
                                        
                                            case 7:
                                            switch ($el) {
                                            
                                            /* affihce la liste des evenemnts deja programmees */
                                            
                                                case 0:
                                                    include 'liste_films_seance.php';
                                                    break;
                                                case 999:
                                                    include 'submit_event.php';
                                                    break;
                                                default:
                                                    include 'saisir_seance.php';
                                                    break;
                                                
                                            }
                                            break;
                                        
                                            case 8:
                                            switch ($el) {
                                            
                                            /* affihce la liste des evenemnts deja programmees */
                                            
                                                case 0:
                                                    include 'liste_events.php';
                                                    break;
                                                case 999:
                                                    include 'submit_event.php';
                                                    break;
                                                default:
                                                    include 'details_seance.php';
                                                    break;
                                                
                                            }
                                            break;
                                    }
                                    ?>
				</div>
			</td>
			<!--  Partie Droite -->
			<td width="20%">
			</td>
		</tr>
	</table>
</body>
</html>
