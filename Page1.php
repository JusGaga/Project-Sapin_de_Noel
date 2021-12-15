<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="initial-scale=1" width="device-width" />
    <title>Sapin De Noel</title>
    <link rel="stylesheet" href="./CSS/stylesNuit.css" id="themes" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="text-light">
    <div>
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
                        <img src="./img/lutin.png" id="lutin" alt="ogo LuLtin Utilisateurs" />
                    </div>
                    <div class="d-flex align-items-center">
                        <h1 id="NbUsers" class="title"><span id="nbrUsers">0</span> Lutins</h1>
                    </div>
                </div>
                <div id="Sw">
                    <label id="switch" class="switch">
                        <input type="checkbox" onchange="" id="slider" />
                        <span class="slider round"></span></label>
                </div>
            </div>
            <div id="stars">
                <div class="stars"></div>
                <div class="moon"></div>
            </div>
        </header>

        <div id="containerCountdown">
            <div class="countdown">
                <div class="countdown-days m-2">
                    <h2 id="days">0</h2>
                    <span>Jour</span>
                </div>

                <div class="countdown-hours m-2">
                    <h2 id="hours">0</h2>
                    <span>Heure</span>
                </div>

                <div class="countdown-minutes m-2">
                    <h2 id="minutes">0</h2>
                    <span>Minute</span>
                </div>

                <div class="countdown-seconds m-2">
                    <h2 id="seconds">0</h2>
                    <span>seconde</span>
                </div>
            </div>
        </div>

        <div id="form">
            <form action="#" method="post" id="inForm">
                <div class="d-flex justify-content-center">
                    <h1 class="m-4" class="title">Inscriptions</h1>
                </div>

                <script>
                    function addPseudo() {
                        let nom = $("#Pseudo").val();
                        console.log(nom)
                        $.post(
                            "addPseudo.php", {
                                titre: nom,
                            },
                            function(data, status) {
                            }
                        );
                    }
                </script>


                <div class="input-group d-flex align-items-center">
                    <label for="Pseudo" class="me-3 d-flex align-items-center">Pseudo</label>
                    <input type="Pseudo" class="form-control rounded-pill" name="Pseudo" id="Pseudo" required pattern="^[a-zA-Z0-9]+$" />
                </div>
                <div id="validation" class="mt-1 d-flex align-items-center">
                    <input type="checkbox" name="NomCadeau" id="accept" onclick="verifie()" />
                    <label for="Validation" class="d-flex mx-3">Validation</label>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" onclick="addPseudo() " class="registerbtn btn btn-success d-flex align-items-center rounded-pill" id="butok" disabled="true">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>

        <footer>
            <div id="foret">
                <div id="Sapin1"></div>
                <div id="Sapin2"></div>
                <div id="Sapin3"></div>
                <div id="Mont1"></div>
                <div id="Mont2"></div>
                <div id="Mont3"></div>
            </div>
        </footer>
    </div>

    <script src="./JS/Compteurs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./JS/verif.js"></script>
    <script src="./JS/CreateListeUsers.js"></script>
    <script src="./JS/ChangementThèmes.js"></script>
</body>

</html>