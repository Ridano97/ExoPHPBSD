


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="pokedex.css">
</head>
<body>
    <img id="sacha" src="./images/sacha.webp" alt="sacha-photo">
    <img id="chen" src="./images/chen.png" alt="chenphoto">
    <div>
        <h1><img id="image_logo" src="./images/logo.png" alt="pokemon"></h1>
    </div>
    <div>
        
    </div>
    <div id="card-poke">
        <table>
            <thead>
                <th><img id="pokedex" src="./images/dex.png" alt="pokedex"> <p>POKéDEX</p> <img id="pokeball" src="./images/poke.png" alt="pokeball-image"></th>
            </thead>
                <tbody>
                    <?php
                    require 'database.php';
                                    //stockage de database et de la fonction                         
                    $appelDeLaFonctionGetPokemon = Database::getPokemon();

                    while($pokemon = $appelDeLaFonctionGetPokemon->fetch()){
                        
                        echo "<tr>";
                        echo '<td><a href="detailsPokemon.php?id='. $pokemon['num_poke'] .'"><img id="poke" src="images/' . $pokemon['img_poke'] . '"></a></td>';
                        echo "<td>".$pokemon["nom"]."</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
        </table>
    </div>
    <footer>
        <ul>
            <li>POKEMON</li>
            <li>POKéDEX</li>
            <li>RIDA©</li>
        </ul>
    </footer>
</body>
</html>