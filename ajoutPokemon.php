<?php

session_start();




?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="pokedex.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout Pokémon</title>
</head>
<body>
    <div id="page-ajout">
         <h1 class="detailstitre"><a href="pokedex.php" target="_self"><img id="logo-back" src="./images/backlogo.png" alt="logo-retour"></a>NOUVEAUX POKÉMONS</h1>
    </div>
    <form action="" method="POST">
        <div class="formulaire">
            <label for="">Nom</label>
            <input type="text" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Taille</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Description</label>
            <input type="text" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Poids</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">HP</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Attaque</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Defense</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Vitesse </label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Attaque spéciale</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Défense spéciale</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Génération</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Version</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Habitat</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <label for="">Compétence</label>
            <input type="number" name="" require id="">
        </div>
        <div class="formulaire">
            <input id="button" type="submit" value="AJOUTER AU POKÉDEX">
        </div>
    </form>
    <footer>
        <ul id="footer">
            <li>POKEMON</li>
            <li>POKéDEX</li>
            <li>RIDA©</li>
        </ul>
    </footer>
</body>
</html>