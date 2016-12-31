/*
SQLyog Community Edition- MySQL GUI v6.55
MySQL - 5.1.36-community-log : Database - cinemabd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`cinemabd` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `cinemabd`;

/*Table structure for table `p_event` */

DROP TABLE IF EXISTS `p_event`;

CREATE TABLE `p_event` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_date_seance` date DEFAULT NULL,
  `e_heure_seance` int(11) DEFAULT NULL,
  `e_minute_seance` int(11) DEFAULT NULL,
  `e_seconde_seance` int(11) DEFAULT NULL,
  `fk_film_id` int(11) NOT NULL,
  `fk_salle_id` int(11) NOT NULL,
  `e_etat_event` int(11) DEFAULT NULL,
  PRIMARY KEY (`e_id`),
  KEY `fk_p_film_p_event_idx` (`fk_film_id`),
  KEY `fk_p_salle_p_event_idx` (`fk_salle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `p_event` */

insert  into `p_event`(`e_id`,`e_date_seance`,`e_heure_seance`,`e_minute_seance`,`e_seconde_seance`,`fk_film_id`,`fk_salle_id`,`e_etat_event`) values (1,'2016-12-12',1,1,1,1,1,2),(2,'2016-12-12',4,1,1,3,1,2),(3,'2016-12-12',8,1,1,5,1,2),(4,'2016-12-12',1,1,1,2,1,2),(5,'2016-12-12',1,1,1,1,1,0),(6,'2016-12-12',1,1,1,1,1,2);

/*Table structure for table `p_fiche` */

DROP TABLE IF EXISTS `p_fiche`;

CREATE TABLE `p_fiche` (
  `fi_id` int(11) NOT NULL AUTO_INCREMENT,
  `fi_titreVF` varchar(255) DEFAULT NULL,
  `fi_titreVO` varchar(255) DEFAULT NULL,
  `fi_annee_realisation` varchar(4) DEFAULT NULL,
  `fi_nationalite` varchar(255) DEFAULT NULL,
  `fi_duree` varchar(100) DEFAULT NULL,
  `fi_notation` int(11) DEFAULT NULL,
  `fi_date_sortie` datetime DEFAULT NULL,
  `fi_themes` varchar(255) DEFAULT NULL,
  `fi_realisateur` varchar(255) DEFAULT NULL,
  `fi_chef_operateur` varchar(255) DEFAULT NULL,
  `fi_musique` varchar(255) DEFAULT NULL,
  `fi_rens_complements` varchar(255) DEFAULT NULL,
  `fi_scenario` varchar(255) DEFAULT NULL,
  `fi_distribution` varchar(255) DEFAULT NULL,
  `fi_visa_exploitation` varchar(255) DEFAULT NULL,
  `fi_acteurs` text,
  `fi_resume` text,
  `fk_film_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`fi_id`),
  KEY `fk_p_fiche_p_film_idx` (`fk_film_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `p_fiche` */

insert  into `p_fiche`(`fi_id`,`fi_titreVF`,`fi_titreVO`,`fi_annee_realisation`,`fi_nationalite`,`fi_duree`,`fi_notation`,`fi_date_sortie`,`fi_themes`,`fi_realisateur`,`fi_chef_operateur`,`fi_musique`,`fi_rens_complements`,`fi_scenario`,`fi_distribution`,`fi_visa_exploitation`,`fi_acteurs`,`fi_resume`,`fk_film_id`) values (1,'Jacques bo','Jacques bo','2016','Americaine','3',17,'2016-01-12 00:00:00','James','','','','','','','','','TEST',1),(2,'FILM 2','FILM 2','','','',0,NULL,'','','','','','','','','','',2),(3,'FILM3','FILM3','','','',0,NULL,'','','','','','','','','','',3),(4,'FILM4','FILM4','','','',0,NULL,'','','','','','','','','','',4),(5,'FILM5','FILM5','','','',0,NULL,'','','','','','','','','','',5),(6,'FILM6','FILM6','','','',0,NULL,'','','','','','','','','','',6);

/*Table structure for table `p_film` */

DROP TABLE IF EXISTS `p_film`;

CREATE TABLE `p_film` (
  `fl_id` int(11) NOT NULL AUTO_INCREMENT,
  `fl_lib` varchar(100) DEFAULT NULL,
  `fl_desc` varchar(500) DEFAULT NULL,
  `fl_motcle` varchar(500) DEFAULT NULL,
  `fk_ge_id` int(11) NOT NULL,
  `fl_image_film` varchar(200) DEFAULT NULL,
  `fl_etat_film` int(11) DEFAULT NULL,
  PRIMARY KEY (`fl_id`),
  KEY `fk_p_film_p_genre_idx` (`fk_ge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `p_film` */

insert  into `p_film`(`fl_id`,`fl_lib`,`fl_desc`,`fl_motcle`,`fk_ge_id`,`fl_image_film`,`fl_etat_film`) values (1,'Jacques bo','TEST','',1,'film2.png',2),(2,'FILM 2','','',1,'film3.png',2),(3,'FILM3','','',1,'film6.jpg',2),(4,'FILM4','','',1,'film1.png',2),(5,'FILM5','','',1,'film6.jpg',0),(6,'FILM6','','',1,'film9.png',2);

/*Table structure for table `p_genre` */

DROP TABLE IF EXISTS `p_genre`;

CREATE TABLE `p_genre` (
  `ge_id` int(11) NOT NULL AUTO_INCREMENT,
  `ge_lib` varchar(100) DEFAULT NULL,
  `ge_desc` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `p_genre` */

insert  into `p_genre`(`ge_id`,`ge_lib`,`ge_desc`) values (1,'ACTION','FILM D\'ACTION'),(2,'HUMOUR','FILM HUMOUR');

/*Table structure for table `p_salle` */

DROP TABLE IF EXISTS `p_salle`;

CREATE TABLE `p_salle` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_libsalle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `p_salle` */

insert  into `p_salle`(`s_id`,`s_libsalle`) values (1,'SALLE 1'),(2,'SALLE 2'),(3,'SALLE 3'),(4,'SALLE 4'),(5,'SALLE 5'),(6,'SALLE 6'),(7,'SALLE 7'),(8,'SALLE 8'),(9,'SALLE 9'),(10,'SALLE 10');

/*Table structure for table `p_utilisateur` */

DROP TABLE IF EXISTS `p_utilisateur`;

CREATE TABLE `p_utilisateur` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_nom` varchar(255) DEFAULT NULL,
  `u_prenom` varchar(255) DEFAULT NULL,
  `u_tel` varchar(255) DEFAULT NULL,
  `u_username` varchar(255) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `p_utilisateur` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  `roleuser` varchar(450) DEFAULT NULL,
  `nom` varchar(450) DEFAULT NULL,
  `prenom` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`iduser`,`username`,`password`,`roleuser`,`nom`,`prenom`) values (5,'admin','e352295313877c67718746ee25fbd68e6b5dd6dc622c297000572540c0b78f07','user','OFFSHORE','OFFSHORE'),(6,'','e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855','','DEMIDO','DEMIDO'),(7,'kokou','9c3125a008064087e6d93acf34289862fd3a625256787183f3b05ed503050809','1','SHAKE','SHAKE'),(8,'hitlab','52b67e4eb11c076ea27b55ef127bbc4af031515103adb11812ed9b4fb2df55b3','1','HITLAB','HITLAB'),(9,'hermann','7a85b99953641cd63134dcb5bcf7a0d6fd1f453238cea2f9505f0267f7767428','1','AKUE','Hermann'),(10,'user','b32e71b55d676bd363fe6d1a0bfe207f84958f787d0253080860f32fe5b39ade','1','USER','USER'),(11,'noussouvi','84285a194163a8f8fd1e09cdd0be89374002473ee73777438f8466aa6213cb7a','1','noussouvi','noussouvi'),(12,'grande','34ca6bb1036d148d7b9ae5650fab821701ac8c8543226650d2ad6e86b0b8f8c0','1','grande','grande');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
