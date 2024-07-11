<?php 
include 'element/header.php';
    
    $con=mysqli_connect('localhost','root','','location_voiture');
    $query="select * from reservation join membre on reservation.id_membre=membre.id_membre ";
    $resulat=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($resulat)){
        
        echo "<div class='reservation'>";
        echo "<div style='color:#fff'>".$row['nom']." ".$row['prenom']."</div>";
        echo "<div style='color:#fff'>".$row['age'] ."</div>";
        echo "<div style='color:#fff'>".$row['date_debut'] ."</div>";
        echo "<div style='color:#fff'>".$row['date_fin'] ."</div>";
        echo "<div style='color:#fff'>".$row['etat'] ."</div>";
        echo "<div style='color:#fff'>".$row['tel'] ."</div>";
        echo "<div style='color:#fff'>".$row['email'] ."</div>";
        echo "<div style='color:#fff'>".$row['montant'] ."</div>";
        echo "<button><a href='etat.php?etat=accorder &id=".$row['id_reservation']."' >accorder</a></button>";
        echo "<button><a href='etat.php?etat=refuser &id=".$row['id_reservation']."' >refuser</a></button>";
        echo "<button><a href='etat.php?etat=encour.. &id=".$row['id_reservation']."' >en cour..</a></button>";
        echo "<button><a href='suprimer_reservation.php?id=".$row['id_reservation']."' >suprimer</a></button>";


        echo "</div>";

        echo "</div>";
        echo "<hr>";

    }

?>