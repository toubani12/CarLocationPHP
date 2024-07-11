<?php
include 'element/header.php';

?>
<form action="valid_addcar.php" method="post">
    <div class="contenair">
        <h1>ajouter une voiture</h1>
        <div class="parent">
            <div class="child">
                <label >Matricule</label>
            </div>
            <div class="child">
                <input type="text" name="matricule">
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Marque</label>
            </div>
            <div class="child">
                <select name="marque" >
                    <option value="FERRARI">FERRARI</option>
                    <option value="TWINGO">TWINGO</option>
                    <option value="DACIA">DACIA212</option>
                    <option value="HYUNDAI">HYUNDAI</option>
                    <option value="PEUJEUT">PEUJEUT</option>
                    <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                    <option value="RENAULT">RENAULT</option>
                </select>
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Prix de jour</label>
            </div>
            <div class="child">
                <input type="number" step="10" min="100" name="prix_jour">DHS
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Kilometrage</label>
            </div>
            <div class="child">
                <input type="number" name="kilometrage">KM
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Modele</label>
            </div>
            <div class="child">
                <input type="number" name="modele" min="1990" step="1">
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Description</label>
            </div>
            <div class="child">
                <textarea name="description" ></textarea>
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <button type="submit">ajouter</button>
            </div>
            <div class="child">
                <button type="reset">renitialiser</button>
            </div>
        </div>
    </div>
</form>
    
</body>
</html>

