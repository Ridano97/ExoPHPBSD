<?php



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
    <img id="pikachu" src="./images/pikachu.png" alt="pikachuphoto">
    <div>
        <h1><img id="image_logo2" src="./images/logo.png" alt="pokemon"></h1>
    </div>
    <form id="inscription" action="" method="POST">
        <div class="formulaire">
            <label for="">Nom Dresseur(se) :</label>
            <input type="text" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Adresse Mail :</label>
            <input type="email" name="" require>
        </div>
        <div class="formulaire">
            <label for="">Mot de passe :</label>
            <input type="password" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Âge :</label>
            <input type="number" min=8 max=100 name="" require id="">
        </div>
        <div class="formulaire">
            <input id="button2" type="submit" value="connexion">
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