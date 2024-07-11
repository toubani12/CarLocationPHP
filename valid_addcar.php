<?php

$con = mysqli_connect("localhost","root","","location_voiture");




    $matricule = $_POST['matricule'];
    $marque = $_POST['marque'];
    $prix_jour = $_POST['prix_jour'];
    $modele = $_POST['modele'];
    $description = $_POST['description'];
    $kilometrage = $_POST['kilometrage'];



    // Insertion des données dans la table "Utilisateurs"
$requete ="INSERT INTO voiture (matricule, marque, prix_jour, modele, description, kilometrage) VALUES ('$matricule', '$marque', '$prix_jour', '$modele', '$description', '$kilometrage')";

if ($query=mysqli_query($con, $requete)){ 
    // Fermeture de la connexion à la base de données
    mysqli_close($con);

    // Redirection vers la page d'accueil
    header('Location: index.php');
    exit;
}else{ 
    echo "<h1>error 999</h1>";
}
?>