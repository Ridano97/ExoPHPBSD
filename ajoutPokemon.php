<?php

session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_POST['nom'];
    $taille = $_POST ['taille'];
    $description = $_POST ['description'];
    $masse = $_POST ['masse'];
    $hp = $_POST ['hp'];
    $attack = $_POST ['attack'];
    $defence = $_POST ['defence'];
    $speed = $_POST ['speed'];
    $attack_spe = $_POST ['attack_spe'];
    $defence_spe = $_POST ['defence_spe'];
    $img_poke = $_POST ['img_poke'];
    $generation = $_POST ['generation'];
    $version_app = $_POST ['version_app'];
    $habitat = $_POST ['habitat'];
    $competence = $_POST ['competence'];
    $categorie = $_POST ['categorie'];

require 'database.php';

$appelDeLaFonctionAddPokemon = Database::addPokemon();

}
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