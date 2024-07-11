<?php
    include "element/header.php";
    
    $prix=$_GET['prix'];
    $matricule=$_GET['matricule'];

?>
<form action="valid_reservation.php?prix=<?php echo $prix ;?>&matricule=<?php echo $matricule ;?>" method="post">
    <div class="contenair">
        <h1>Réservation</h1>
        <div class="parent">
            <div class="child">
                <label >Date debut </label>
            </div>
            <div class="child">
                <input type="date" name="date_debut">
            </div>
        </div>
        <div class="parent">
            <div class="child">
                <label >Date fin</label>
            </div>
            <div class="child">
                <input type="date" name="date_fin">
            </div>
        </div>
        <div class="parent">
            <button type="submit">Validé la réservation</button>
        </div>

    </div>

</form>


    
</body>
</html>