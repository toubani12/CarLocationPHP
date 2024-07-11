<?php
include 'element/header.php';
$matricule=$_GET['matricule'];
$marque=$_GET['marque'];
$prix=$_GET['prix'];
$kilometrage=$_GET['kilometrage'];
$modele=$_GET['modele'];
$description=$_GET['description'];
?>
<form action="valid_modifier.php" method="post">
    <div class="contenair">
        <h1>ajouter une voiture</h1>
        <div class="parent">
            <div class="child">
                <label >Matricule</label>
            </div>
            <div class="child">
                <input type="text" name="matricule" value=<?php echo $matricule;?> readonly>
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Marque</label>
            </div>
            <div class="child">
                <input type="text" name="marque" value=<?php echo $marque;?>>
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Prix de jour</label>
            </div>
            <div class="child">
                <input type="number" step="10" min="100" name="prix_jour" value=<?php echo $prix;?>>DHS
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Kilometrage</label>
            </div>
            <div class="child">
                <input type="number" name="kilometrage" value=<?php echo $kilometrage;?>>KM
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Modele</label>
            </div>
            <div class="child">
                <input type="number" name="modele" min="1990" step="1" value=<?php echo $modele;?>>
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Description</label>
            </div>
            <div class="child">
                <textarea name="description"  ><?php echo $description;?></textarea>
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <button type="submit">modifier</button>
            </div>
            <div class="child">
                <button type="reset">renitialiser</button>
            </div>
        </div>
    </div>
</form>
    
</body>
</html>

