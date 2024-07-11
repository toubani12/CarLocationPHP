
<?php
session_start();

$con = mysqli_connect("localhost","root","","location_voiture");

// Vérification de la soumission du formulaire
if (isset($_POST['connexion'])) {
    // Récupération des données du formulaire
    $email = $_POST['email'];
    $mot_de_passe = $_POST['pwrd'];

    // Recherche de l'utilisateur correspondant à l'email et au mot de passe
    $requete = "SELECT * FROM membre WHERE email = '$email' AND pwrd = md5('$mot_de_passe')";
    $resultat = mysqli_query($con, $requete);

    if (mysqli_num_rows($resultat)) {
        // L'utilisateur est connecté avec succès
        $utilisateur = mysqli_fetch_assoc($resultat);

        // Stockage des informations de l'utilisateur dans la session
        $_SESSION['id_membre'] = $utilisateur['id_membre'];
        $_SESSION['nom']=$utilisateur['nom'];
        $_SESSION['prenom']=$utilisateur['prenom'];
        
        $_SESSION['est_admin'] = $utilisateur['est_admin'];
  
        

        // Redirection vers la page d'accueil
        header('Location: index.php');
        exit;
    } else {
        // Affichage d'un message d'erreur si l'authentification a échoué
        $erreur = '<p style="color:red">Email ou mot de passe incorrect</p>';
    }
}

// Fermeture de la connexion à la base de données
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    


    <title>Document</title>
</head>
<body>
    <header>
        <div class="imagh">
            <img src="images/MicrosoftTeams-image.png" alt="">
        </div>
        <div>
            <h1 class="titre" style="color:aliceblue">Connexion</h1>
        </div>
    </header>
    <?php if (isset($erreur)) { ?>
        <p><?php echo $erreur ?></p>
    <?php } ?>


<form action="connexion.php" method="post">
    <label >Email :</label>
    <input type="email" name="email"  required>

    <label >Mot de passe :</label>
    <input type="password" name="pwrd" required>

    <button type="submit" name="connexion">Se connecter</button>
</form>
</body>
</html>