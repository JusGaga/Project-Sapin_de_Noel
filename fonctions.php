<?php
require_once "ressources.php";


function query( $q )
{
    GLOBAL $servername, $username, $password, $database;
    $mysqli = new mysqli($servername, $username, $password, $database);
    return $mysqli->query( $q );
    $mysqli->close();
    return $res;
}

<<<<<<< HEAD
function comboBox(  $table, $query=""  )
=======
function comboBox(  $table, $query="", $visibleAdd=1  )
>>>>>>> formulair
{
    GLOBAL $servername, $username, $password, $database;

    print( "<select name='$table'>\n");
    $mysqli = new mysqli($servername, $username, $password, $database);
    if ( $query == "")
        $query  = "select * from $table;";
    //print( $query."<br>");
    $res = $mysqli->query( $query );
    while(  ($ligne = $res->fetch_assoc()) )
    {
        $id  = $ligne[ 'id' ];
        $nom = $ligne[ 'nom' ];
<<<<<<< HEAD
        print( "<option value=$id> $nom</option>\n" );
    }
    $mysqli->close();
    print( "</select>\n");
    print( "<div class='buttonCombo' onclick=\"addItem( '$table', 'ajout $table' )\" >+</div>\n");
=======
        print( "<option value=$id>".utf8_encode($nom)."</option>\n" );
    }
    $mysqli->close();
    print( "</select>\n");
    if($visibleAdd)
        print( "<div class='buttonCombo' onclick=\"addItem( '$table', 'ajout $table' )\" >+</div>\n");
>>>>>>> formulair
}

function entete( $titre_page )
{
    $var = <<<TOTO123
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>$titre_page</title>
        <link rel="stylesheet" href="fonctions.css">
        <script type="text/javascript" src="fonctions.js"></script>
    </head>
    <body>
    TOTO123;
    print( $var );
}




?>


