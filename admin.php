<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Page Admin</title>
    <link rel="stylesheet" href="./CSS/stylesNuit.css" id="themes" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="text-light">
    <header>
        <div class="d-flex flex-row justify-content-between m-2 p-2">
            <div id="tittre" class="d-flex align-items-center">
                <a href="Page1.html" id="lienTitre">
                    <h1 class="title titre">Sapin de Noël</h1>
                </a>
            </div>
            <div id="PNoel">
                <a href="./admin.html"><img src="./img/pere-noel.png" id="PereNoel" alt="logo Pere noel" /></a>
            </div>
        </div>
        <div>
            <div id="soustitle" class="d-flex flex-row m-2 p-2">
                <div id="LutinUsers">
                    <img src="./img/lutin.png" id="lutin" alt="Logo Lutin Utilisateurs" />
                </div>
                <div class="d-flex align-items-center">
                    <h1 id="NbUsers" class="title"><span id="nbrUsers">0</span> Lutins</h1>
                </div>
            </div>
            <div id="Sw">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="" id="slider" />
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
    </header>

    <main>
        <form action="" class="form-group col-3 mx-4">
            <label for="date">Changement de date compteurs : </label>
            <input type="date" name="date" class="form-control text-center mt-2" />
            <div class="d-flex justify-content-end mt-2">
                <button type="submit" class="btn btn-primary w-100">Changer la date</button>
            </div>
        </form>

        <!-- <script>
            function list(url) {
                $.get(
                    // premier param URL qui fournit les données
                    url,
                    // deuxieme param fonction callBack qui traite les données 
                    function(data, status) {
                        // $( "#tableau" ).append( " " );
                        let i = 1;
                        let tableau = JSON.parse(data);
                        console.log(tableau);
                        let chaine = "";
                        //  chaine = '<table class="text-center col-6"><thead><th class="px-4" colspan="3">Liste des utilisateurs</th></tr><tr><th>ID</th><th colspan="2">Name</th></tr></thead>';
                        for (ligne of tableau){
                            chaine += `<tr><td class="col-4">${ligne["id"]}</td>
                            <td class="col-4">${ligne["pseudo"]}<td/>
                            <button id="${i}" class="btn" onclick="SuppList(this.id)">❌</button></tr>`;
                            i++;}
                        console.log(chaine)
                        $("#tableau").append(chaine);
                    }
                )
            };

            function listUtilisateur() {
                list("utilisateurs.php");
            }
        </script> -->
        <!-- <button onclick="listUtilisateur()">button</button>
        <div id="aff"></div> -->

        <table class="text-center col-6">
            <thead>
                <tr>
                    <th class="px-4" colspan="3">Liste des utilisateurs</th>
                </tr>
                <tr>
                    <th>ID</th>
                    <th colspan="2">Name</th>
                </tr>
            </thead>
            <tbody id="tableau">

            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./JS/Tableau.js"></script>
    <script src="./JS/ChangementThèmes.js"></script>
</body>

</html>