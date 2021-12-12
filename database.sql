CREATE DATABASE Noel;

use Noel

CREATE TABLE inscriptions (
    ->   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ->   pseudo VARCHAR(50)
    -> );

into utilisateur_inscrit ( pseudo ) values( "hanane" );
into utilisateur_inscrit ( pseudo) values( "remy");
into utilisateur_inscrit ( pseudo ) values( "olivier" );
into utilisateur_inscrit ( pseudo ) values( "xavier" );
into utilisateur_inscrit ( pseudo) values( "jean-philippe" );


 CREATE TABLE admin (
    ->   id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    ->   nom VARCHAR(30),
    ->   pw VARCHAR(30)
    -> );


insert into admin ( nom, pw ) values( "admin" , "toto" );