<?php
session_start();
require "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = htmlspecialchars($_POST['nom']);
    $mdp = htmlspecialchars($_POST['mdp']);

    // Tentative de connexion de l'utilisateur
    $utilisateur = Database::connectUtilisateur($nom, $mdp);
    if ($utilisateur) {
        // Utilisateur connecté avec succès, enregistrez ses informations de session
        $_SESSION['nom'] = $utilisateur['mdp']; // Remplacez 'id' par le nom de la colonne correspondante dans votre table utilisateur
        // Redirigez l'utilisateur vers une page de tableau de bord, par exemple
        header("Location: pokedex.php");
        exit();
    } else {
        // Affichez un message d'erreur si la connexion a échoué
        $erreur = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="pokedex.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body> 
<div>
        <h1><img id="image_logo2" src="./images/logo.png" alt="pokemon"></h1>
    </div>
    <form id="inscription" action="" method="POST">
        <div class="formulaire">
            <label for="">Nom Dresseur(se) :</label>
            <input type="text" name="nom" require id="">
        </div>
        <div class="formulaire">
            <label for="">Mot de passe :</label>
            <input type="password" name="mdp" require id="">
        </div>
        <div class="formulaire">
            <input id="button2" type="submit" value="Connexion">
        </div>
    </form>
    <?php
    // Affichage du message d'erreur s'il y en a un
    if (isset($erreur)) {
        echo "<p style='color: red;'>$erreur</p>";
    }
    ?>
    <footer>
        <ul>
            <li>POKEMON</li>
            <li>POKéDEX</li>
            <li>RIDA©</li>
        </ul>
    </footer>
    
</body>
</html>