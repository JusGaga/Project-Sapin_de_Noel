<?php

require_once "ressources.php";

if ($_GET) {
    $nom = $_GET["nom"];
    $pw  = $_GET["pw"];

    $mysqli = new mysqli($servername, $username, $password, $database);


    $query  = "select * from admin where nom='$nom' and pw='$pw';";
    print($query . "<br>");

    $res = $mysqli->query($query);
    if ($res->num_rows > 0) {
        print("login valide<br>");
        $ligne = $res->fetch_assoc();
       
        $nom = $ligne['nom'];
 
        print("bonjour $nom, tu as $age ans et ton ID est $id<br>");
    } else
        print("login invalide<br>");



    $mysqli->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="#" method="GET">
        <input type="text" placeholder="saisir login" name="nom">
        <br>
        <input type="text" placeholder="saisir PW" name="pw">
        <br>
        <button type="submit">CONNECT</button>
    </form>


</body>

</html>