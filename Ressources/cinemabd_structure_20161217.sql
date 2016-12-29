
CREATE DATABASE cinemabd ;
USE cinemabd ;
-- table genre
CREATE  TABLE p_genre(
	ge_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	ge_lib VARCHAR(100),
	ge_desc VARCHAR(500)
) ;
INSERT INTO p_genre(ge_lib,ge_desc) VALUES ('ACTION','FILM D''ACTION') ;
INSERT INTO p_genre(ge_lib,ge_desc) VALUES ('HUMOUR','FILM HUMOUR') ;

SELECT * FROM p_genre ;

-- table film
CREATE TABLE p_film (
	fl_id INT(11) NOT NULL AUTO_INCREMENT,
	fl_lib VARCHAR(100) , 
	fl_desc VARCHAR(500) , 
	fl_motcle VARCHAR(500),
	fk_ge_id INT(11) NOT NULL ,
	PRIMARY KEY  (fl_id),
	KEY fk_p_film_p_genre_idx(fk_ge_id)
) ;

-- table Fiche
CREATE TABLE p_fiche ( 
	fi_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fi_titreVF VARCHAR(255),
	fi_titreVO VARCHAR(255),
	fi_annee_realisation VARCHAR(4),
	fi_nationalite VARCHAR(255),
	fi_duree VARCHAR(100),
	fi_notation INT ,
	fi_date_sortie DATETIME ,
	fi_themes VARCHAR(255), 
	fi_realisateur VARCHAR(255),
	fi_chef_operateur VARCHAR(255),
	fi_musique VARCHAR(255),
	fi_rens_complements VARCHAR(255),
	fi_scenario VARCHAR(255),
	fi_distribution VARCHAR(255),
	fi_visa_exploitation VARCHAR(255),
	fi_acteurs TEXT , 
	fi_resume TEXT,
	fk_film_id INT,
	KEY fk_p_fiche_p_film_idx(fk_film_id)
) ;

-- table  salle
CREATE TABLE p_salle(
	s_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	s_libsalle VARCHAR(255)
) ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 1') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 2') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 3') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 4') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 5') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 6') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 7') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 8') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 9') ;
INSERT INTO p_salle(s_libsalle) VALUES('SALLE 10') ;

SELECT * FROM p_salle ;




-- table event
CREATE TABLE p_event (
  e_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  e_date_seance DATE ,
  e_heure_seance INT ,
  e_minute_seance INT,
  e_seconde_seance INT,
  fk_film_id INT(11) NOT NULL,
  fk_salle_id INT(11) NOT NULL,
  KEY fk_p_film_p_event_idx(fk_film_id),
  KEY fk_p_salle_p_event_idx(fk_salle_id)
) ;

-- table des utilisateurs

CREATE TABLE p_utilisateur (
  u_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  u_nom VARCHAR(255),
  u_prenom VARCHAR(255),
  u_tel VARCHAR(255),
  u_username VARCHAR(255),
  u_password VARCHAR(255)
) ;

SELECT * FROM p_utilisateur ;



