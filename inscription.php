<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $date_naissance = $_POST['date_naissance'];


require 'database.php';

$appelDeLaFonctionAddUtilisateur = database::addUtilisateur($nom, $mail, $mdp, $date_naissance);


}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="pokedex.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <p id="dialoguepikachu">Pika Pika chu !</p>
    <img id="pikachu" src="./images/pikachu.png" alt="pikachuphoto">
    <div>
        <h1><img id="image_logo2" src="./images/logo.png" alt="pokemon"></h1>
    </div>
    <form id="inscription" action="" method="POST">
        <div class="formulaire">
            <label for="">Nom Dresseur(se) :</label>
            <input type="text" name="nom" require id="">
        </div>
        <div class="formulaire">
            <label for="">Adresse Mail :</label>
            <input type="email" name="mail" require>
        </div>
        <div class="formulaire">
            <label for="">Mot de passe :</label>
            <input type="password" name="mdp" require id="">
        </div>
        <div class="formulaire">
            <label for="">Date de naissance :</label>
            <input type="date" name="date_naissance" require id="">
        </div>
        <div class="formulaire">
            <input id="button2" type="submit" value="Inscription">
        </div>
    </form>
    <footer>
        <ul>
            <li>POKEMON</li>
            <li>POKéDEX</li>
            <li>RIDA©</li>
        </ul>
    </footer>
</body>
</html>