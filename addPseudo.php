<?php
    require_once "ressources.php";
    require_once "fonctions.php";

    $titre = $_POST[ 'titre'];
    $query  = "insert into utilisateur_inscrit ( pseudo ) values ('$titre');";
    //print( $query );
    query( $query );
?>