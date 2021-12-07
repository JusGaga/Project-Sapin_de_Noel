CREATE DATABASE Sapin_de_Noel;

use Sapin_de_Noel;

CREATE TABLE admin (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nom VARCHAR(30),
  pw VARCHAR(30)
);

CREATE TABLE  utilisateur_inscrit (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  pseudo VARCHAR(30),
  email VARCHAR(50),
  cadeau boolean not null default 0
);

insert into admin ( nom, pw ) values( "admin" , "toto" );

insert into utilisateur_inscrit ( pseudo,email ) values( "hanane","dgfdfdg@gmzil.fr" );
insert into utilisateur_inscrit ( pseudo,email ) values( "remy","123@gmzil.fr" );
insert into utilisateur_inscrit ( pseudo,email ) values( "olivier","1234@gmzil.fr" );
insert into utilisateur_inscrit ( pseudo,email ) values( "xavier","12345@gmzil.fr" );
insert into utilisateur_inscrit ( pseudo,email ) values( "jean-philippe","123456@gmzil.fr" );