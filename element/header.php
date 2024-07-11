
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
            <img src="images/car.png" alt="">
        </div>
        <div class="navbar">
            <?php
            session_start();
            $est_connecter= isset($_SESSION['id_membre']);
            if($est_connecter){
                            if ($_SESSION['est_admin']){
                                echo "<h6>Administrateur";
                            }else{
                                echo "<h6>Bonjour";
                            }
                            echo " ".$_SESSION['nom']." ".$_SESSION['prenom']."</h6>";
                            if ($_SESSION['est_admin']){
                                echo "<a href='addcar.php'>ajouter une voiture</a>";
                                echo "<a href='reservation.php'>Réservations</a>";
                            }else{
                                echo "<a href='myorder.php'>Mes reservation</a>";
                            }
                            echo '<a href="index.php">Liste Voitures</a>';
                            
                            echo "<a href='deconnexion.php'>Déconnecter</a>";
            }else{
                
                echo '<a href="index.php">Liste VOiture</a>';
                echo "<a href='connexion.php'>connection</a>";
                echo '<a href="ajouter.php">creer un compte</a>';
            }
                
            ?>
        </div>

    </header>