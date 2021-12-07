CREATE DATABASE Noel;

use Noel

CREATE TABLE inscriptions (
    ->   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ->   pseudo VARCHAR(50),
    ->   email VARCHAR(255)
    -> );

into utilisateur_inscrit ( pseudo,email ) values( "hanane","dgfdfdg@gmzil.fr" );
into utilisateur_inscrit ( pseudo,email ) values( "remy","123@gmzil.fr" );
into utilisateur_inscrit ( pseudo,email ) values( "olivier","1234@gmzil.fr" );
into utilisateur_inscrit ( pseudo,email ) values( "xavier","12345@gmzil.fr" );
into utilisateur_inscrit ( pseudo,email ) values( "jean-philippe","123456@gmzil.fr" );


 CREATE TABLE admin (
    ->   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ->   nom VARCHAR(30),
    ->   pw VARCHAR(30)
    -> );


insert into admin ( nom, pw ) values( "admin" , "toto" );