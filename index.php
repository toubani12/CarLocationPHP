<?php
  include_once "element/header.php";

?>
<?php 

    
    $con=mysqli_connect('localhost','root','','location_voiture');
    $query='select * from voiture ';
    $resulat=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($resulat)){
        $matricule=$row['matricule']
        

?>
    <div class="conteneur">
    <?php
       echo '<div class="case">';
            
                 echo ' <div class="nvoitur">'.$row['marque'] .'</div>';
                 echo' <div class="imag">';
                 echo '<img src="images/'.$row['marque'].'.jpeg" class="imgg" >';
                echo'</div>';
                echo '<div class="btn">';
                if($est_connecter){
                if ($_SESSION['est_admin']){
                    echo '<button class="det"><a href="modifier.php?matricule='.$matricule.'& marque='.$row['marque'].'& description='.$row['description'].'& modele='.$row['modele'].'& prix='.$row['prix_jour'].'& kilometrage='.$row['kilometrage'].'" class=abuton>modifier</a></button>';
    
                }else{
                echo '<button class="det"><a href="detail.php?matricule='.$matricule.'" class=abuton>Détail</a></button>';
                echo '<button class="choix"><a href="reserver.php?prix='.$row['prix_jour'].'&matricule='.$matricule.'" class=abuton>Réserver</a></button>';

                }}else{
                    echo '<button class="det"><a href="detail.php?matricule='.$matricule.'" class=abuton>Détail</a></button>';
    
                } 
                echo '</div>';
                echo '</div>';
        echo '</div>';
    }

                ?>
       

           
        


    </div>
</body>
</html>