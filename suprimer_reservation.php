<?php 
    session_start();
    $etat=$_GET['etat'];
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','location_voiture');
    $query="delete from reservation  where id_reservation='".$id."'";
    $requet=mysqli_query($con,$query);

    header('Location: reservation.php');

    

?>