<?php
require_once "fonctions.php";
entete("GestionAdmin");

session_start();
?>
    <h2>Changement de la date de l'évenement</h2>
    <form action="" method="POST" id="form">
    <input type="date" name="InputDate" id="InputDate" >
    <input type="submit" name="ValiderBtn" value="Valider">
</form>

</body>
<?php 
if(isset($_POST['ValiderBtn'])){
    sleep(1);
    $newDate = $_POST['InputDate'];
    $_SESSION["dateDemander"] = $newDate;
}
?>
<script>
    let i = 0;
    document.querySelector('#form').addEventListener("submit", e =>{
        let p = document.createElement('p');
        p.innerText = "Vous avez bien changer la date de l'évenement"
        p.className = "firstChild"
        if(i === 0){
        document.querySelector("#form").appendChild(p)
        i++;
        setTimeout(e=>{
            i = 0
            document.querySelector("#form").removeChild(document.querySelector(".firstChild"))
        },5000)
        }
    })
    
    
</script>
</html>