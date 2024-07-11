<?php
include_once "element/header.php";
?>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
<link rel="stylesheet" href="bootstrap/bootstrap-grid.min.css">
<link rel="stylesheet" href="bootstrap/bootstrap-reboot.css">
<link rel="stylesheet" href="bootstrap/bootstrap.css">
<!-- Formulaire de création de compte -->
?>
    <form action="valide_creation.php" method="POST">
        <div class="contener">
            <div>
                <label >Nom: </label>
                <input type="text" name="nom">
            </div>
            <div>
                <label >Prénom: </label>
                <input type="text" name="prenom">
            </div>
            <div>
                <label >Age: </label>
                <input type="number" name="age" value="18" max="65" min="18" >ans
            </div>
            <div>
                <label >Sexe: </label>
                <input type="radio"  name="sexe" value ='feminin' checked>Féminin
                <input type="radio"  name="sexe" value ='masculin'>Masculin
            </div>
            <div>
                <label >Email:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label >Telephone: </label>
                <input type="tel" name="tel">
            </div>
            <div>
                <label >Mot de passe:</label>
                <input type="password" name="pwrd">
            </div>
            <div class="button">
                <button type="submit">Créer</button>
                <button type="reset">Rénitialisé</button>
            </div>
        </div>
    </form>
</body>
</html>