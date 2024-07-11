<?php 
    session_start();
    $etat=$_GET['etat'];
    $id=$_GET['id'];
    $con=mysqli_connect('localhost','root','','location_voiture');
    $query="update reservation set etat='".$etat."' where id_reservation='".$id."'";
    $requet=mysqli_query($con,$query);
    if ($_SESSION['est_admin']){
        header('Location: reservation.php');
    }else{
        header('Location: myorder.php?id='.$_SESSION['id_membre']);
    }
    

?>