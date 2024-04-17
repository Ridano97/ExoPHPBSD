


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokédex</title>
    <link rel="stylesheet" href="pokedex.css">
</head>
<body>

    <div>
        <h1><img id="image_logo" src="./images/poke.webp" alt="pokemon"></h1>
    </div>
    <div>

    </div>
    <div id="card-poke">
        <table>
            <thead>
                <th><img id="pokedex" src="./images/dex.png" alt="pokedex"> <p>POKEMON</p> <img id="pokeball" src="./images/poke.png" alt="pokeball-image"></th>
            </thead>
                <tbody>
                    <?php
                    require 'database.php';
                                    //stockage de database et de la fonction                         
                    $appelDeLaFonctionGetPokemon = Database::getPokemon();

                    while($pokemon = $appelDeLaFonctionGetPokemon->fetch()){
                        
                        echo "<tr>";
                        echo '<td><img id="poke" src="images/' . $pokemon['img_poke'] . '"></td>';
                        echo "<td>".$pokemon["nom"]."</td>";
                        echo "</tr>"; 
                        /* echo "<td>".$pokemon["taille"]."</td>"; */
                      /*   echo "<td>".$pokemon["hp"]."</td>";
                        echo "<td>".$pokemon["description"]."</td>";
                        echo "<td>".$pokemon["attack"]."</td>";
                        echo "<td>".$pokemon["defence"]."</td>";
                        echo "<td>".$pokemon["speed"]."</td>";
                        echo "<td>".$pokemon["attack_spe"]."</td>";
                        echo "<td>".$pokemon["defence_spe"]."</td>";
                        echo "<td>".$pokemon["generation"]."</td>";
                        echo "<td>".$pokemon["version_app"]."</td>";
                        echo "<td>".$pokemon["habitat"]."</td>";
                        echo "<td>".$pokemon["competence"]."</td>";
                        echo "<td>".$pokemon["categorie"]."</td>";  */

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