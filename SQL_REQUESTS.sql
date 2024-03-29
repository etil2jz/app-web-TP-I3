CREATE DATABASE thunderdome24 DEFAULT CHARSET=utf8;

USE thunderdome24;

CREATE TABLE planning(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    jour VARCHAR(8) NOT NULL,
    capacite INT NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE utilisateur(
    id_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login VARCHAR(48) NOT NULL,
    nom VARCHAR(64) NOT NULL,
    prenom VARCHAR(64) NOT NULL,
    mot_de_passe CHAR(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE reservation(
    id_reservation INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom_reservation VARCHAR(64) NOT NULL,
    type_passe VARCHAR(6) NOT NULL,
    jour_reservation VARCHAR(8) NOT NULL,
    nombre_places INT NOT NULL,
    commentaire TEXT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE reservation_utilisateur(
    id_reservation INT NOT NULL,
    id_user INT NOT NULL,
    PRIMARY KEY(id_reservation, id_user),
    FOREIGN KEY(id_reservation) REFERENCES RESERVATION ON UPDATE CASCADE,
    FOREIGN KEY(id_user) REFERENCES UTILISATEUR ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




