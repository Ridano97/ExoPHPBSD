<?php

    session_start();

    $id_pokemon = $_GET['id'];

    $dsn = 'mysql:host=localhost;dbname=pokedex';
    $user = 'root';
    $password = 'root';

    $connexion = new PDO($dsn, $user, $password);
    $sql = "SELECT * FROM pokemon WHERE num_poke = :id";
    $requete = $connexion->prepare($sql);
    $requete->execute(array('id'=>$id_pokemon));
    $infosPokemon = $requete->fetch();

    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="pokedex.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Pokémon</title>
    
</head>
<body>
    <div id="entete">
        <img id="pierre" src="./images/pierre.png" alt="photo_pierre">
        <img id="lili" src="./images/lili.png" alt="lili-photo">
        <h1 class="detailstitre"><a href="pokedex.php" target="_self"><img id="logo-back" src="./images/backlogo.png" alt="logo-retour"></a> DÉTAILS POKÉMON</h1>
    </div>
    <div>
            <?php
                    require 'database.php';
                                    //stockage de database et de la fonction                         
                    $appelDeLaFonctionGetPokemon = Database::getPokemonById($id_pokemon);

                    while($pokemon = $appelDeLaFonctionGetPokemon->fetch()){
                        echo "<ol>";
                        echo '<li><img id="poke" src="images/' . $pokemon['img_poke'] . '"></li>';
                        echo "<li>Nom : ".$pokemon["nom"]."</li>";
                        echo "<li>Taille : ".$pokemon["taille"]."</li>";
                        echo "<li>Description : ".$pokemon["description"]."</li>";
                        echo "<li>Poids : ".$pokemon["masse"]."</li>";
                        echo "<li>HP : ".$pokemon["hp"]."</li>";
                        echo "<li>Attaque : ".$pokemon["attack"]."</li>";
                        echo "<li>Défense : ".$pokemon["defence"]."</li>";
                        echo "<li>Vitesse : ".$pokemon["speed"]."</li>";
                        echo "<li>Attaque spéciale : ".$pokemon["attack_spe"]."</li>";
                        echo "<li>Défense spéciale : ".$pokemon["defence_spe"]."</li>";
                        echo "<li>Génération : ".$pokemon["generation"]."</li>";
                        echo "<li>Version : ".$pokemon["version_app"]."</li>";
                        echo "<li>Habitat : ".$pokemon["descriptionHabitat"]."</li>";
                        echo "<li>         ".$pokemon["nomHabitat"]."</li>";
                        echo "<li>Compétence : ".$pokemon["competence"]."</li>";
                        echo "<li>            ".$pokemon["nomCompetence"]."</li>";
                        echo "<li>            ".$pokemon["descriptionComp"]."</li>";
                        echo "<li>Catégorie : ".$pokemon["categorie"]."</li>";
                        echo "<li>           ".$pokemon["nomCategorie"]."</li>";
                        echo "<li>          ".$pokemon["descriptionCat"]."</li>";

                        echo "</ol>";
                    }
                    ?>
    </div>
    <footer>
        <ul id="footer">
            <li>POKEMON</li>
            <li>POKéDEX</li>
            <li>RIDA©</li>
        </ul>
    </footer>
</body>
</html>