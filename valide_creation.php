<?php

$con = mysqli_connect("localhost","root","","location_voiture");


// Traitement du formulaire de création de compte

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $sexe = $_POST['sexe'];
    $pwrd = $_POST['pwrd'];
    $age = $_POST['age'];
    // Connexion à la base de données


    // Insertion des données dans la table "Utilisateurs"
$requete ="INSERT INTO membre (nom, prenom, email, tel, sexe, pwrd,age) VALUES ('$nom', '$prenom', '$email', '$tel', '$sexe', md5('$pwrd'),'$age')";

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