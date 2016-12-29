<?php
/*Code servant a la connexion a la base de donn�es*/
@mysql_connect('localhost', 'root', '') or die("erreur de connexion au serveur");
@mysql_select_db('cinemabd') or die("erreur de connexion a la base de donnees");
?>