<?php

session_start();

if (isset($_GET['prix'], $_GET['matricule'], $_POST['date_debut'], $_POST['date_fin'])) {
    $prix = $_GET['prix'];
    $matricule = $_GET['matricule'];

    $date_debut = new DateTime($_POST['date_debut']);
    $date_fin = new DateTime($_POST['date_fin']);
    
    $dif = $date_fin->diff($date_debut);
    $montant = $dif->days * $prix;

    $con = mysqli_connect("localhost", "root", "", "location_voiture");
    $requet = "INSERT INTO reservation (date_debut, date_fin, montant, id_membre, matricule) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $requet);
    mysqli_stmt_bind_param($stmt, "ssdis", $_POST['date_debut'], $_POST['date_fin'], $montant, $_SESSION['id_membre'], $matricule);
    
    if (mysqli_stmt_execute($stmt)) {
        header('Location: myorder.php');
        exit;
    } else {
        echo '<h1 style="color:#fff">error</h1>';
    }
} else {
    echo '<h1 style="color:#fff">error</h1>';
}

?>
