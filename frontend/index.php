<?php
//Lance la connexion avec la base donnes
include "../connection.php";
include "../fonction.php";

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
<link rel="stylesheet" type="text/css" href="../styles.css" />
<title>Application de Gestion de Films</title>
</head>
<body>
<!-- Cration d'un tableau pour positionner le corps au milieu de la page -->
<table BORDER="0" CELLPADDING="0" CELLSPACING="0" style="margin-left: -300px;" >
		<tr width="100%" align="center">
			<!-- Partie Gauche -->
			<td width="50%">
			</td>
			<!-- Cration du contenu de la page -->
			<td align="center">
				<!-- Entete de la Page daccueil -->
                                
				<div id="bandeaufrontend">
                                    <br>&nbsp;<br>
                                    <br>&nbsp;<br>
                                    <br>&nbsp;<br>
                                    <br>&nbsp;<br>
                                    <br>&nbsp;
                                   
                                 
					
					<br>&nbsp;<br>
					<!--<a href="?"><img border="0" src="../images/accueil.png"></a>&nbsp;-->
				</div>
                                <?php
                                        if ($id == 0){
                                ?>
                                 <span id="connexion" >
                                     <a href="?id=1"><img border="0" width="200px" height="50px;" style="margin-left: 30px;margin-bottom: 0px" src="../images/login/sidentifier.jpg"></a> <br>
                                    </span>
                                 <span id="leftimage" >
                                     <a href="?id=2" ><img border="0" width="200px" height="100px;" style=" margin-top: -50px;margin-left: 1700px;margin-bottom: 0px" src="../images/login/miage.jpeg"></a> <br>
                                    </span>
                                  <?php
                                        }
                                ?>
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
                                                    include '../login.php';
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
//                                      
                                        /* affiche la page de programmation de Film */
                                        case 2:
                                            switch ($el)
                                            /* affiche la liste des Films  */ {
                                                case 0:
                                                    include 'apropos.php';
                                                    break;
                                            }
                                            break;
                                       case 5:
                                            switch ($el) {
                                                default:
                                                    include 'details_fiche_frontend.php';
                                                    break;
                                                
                                            }
                                            break;
                                       case 8:
                                            switch ($el) {
                                                default:
                                                    include 'details_seance_frontend.php';
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
