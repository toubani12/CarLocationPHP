<?php 
include 'element/header.php';
    $matricule=$_GET['matricule'];
    $con=mysqli_connect('localhost','root','','location_voiture');
    $query="select * from voiture where matricule='".$matricule."'";
    $resulat=mysqli_query($con,$query);
    while($row=mysqli_fetch_assoc($resulat)){
        echo "<div class='detail'>";
        echo "<div style='color:#fff'>".$row['marque'] ."</div>";
        echo "<div style='color:#fff'>".$row['modele'] ."</div>";
        echo "<div style='color:#fff'>".$row['description'] ."</div>";
        echo "<div style='color:#fff'>".$row['kilometrage'] ."</div>";
        echo "</div>";
    }

?>

