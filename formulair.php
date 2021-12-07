
<?php
session_start();
require_once "ressources.php";
require_once "fonctions.php";
               
    if ($_GET)
    {
        $nom = $_GET[ 'Pseudo' ];
        $mail = $_GET[ 'Email' ];             
     

        $mysqli = new mysqli($servername, $username, $password, $database);
        $query  = "insert into utilisateur_inscrit ( pseudo , email) values (' $nom', '$mail' );";
        //print( $query );
        $res = $mysqli->query( $query );

        if ($res)
        // {
        //     if ($res->num_rows == 0)
         print("<h3>Vous etes bien inscrit pour le tirage au sort</h3>");
        
        // }
        // else
        //    print("<h3>erreur</h3>");

        $mysqli->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<style>

.button
{
    width: 150px;
    border-left: 1px solid #000;

}

</style>

<body>
    <div classe="button"></div>
        <form action="#" method="get">

    <label for="Pseudo"><b>Pseudo</b></label>
    <input type="Pseudo" placeholder="Enter Pseudo" name="Pseudo" id="Pseudo" required>
        <br>
        <br>
    <label for="Email"><b>Email</b></label>
    <input type="Email" placeholder="Enter Email" name="Email" id="Email" required>
        <br>
<input type="checkbox" name="NomCadeau" id="NomCadeau"> 
<label for="Validation"><b>Validation</b></label>

       <br>
    <button type="submit" class="registerbtn">OK</button>
        </form>
</body>
</html>