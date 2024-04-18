<?php

class Database {

    private static $dbHost = "localhost";
    private static $dbName = "pokedex";
    private static $dbUserName = "root";
    private static $dbUserPassword = "root";
    private static $connexion = null;

    public static function connect() {
        if (self::$connexion == null) {
            try {
                self::$connexion = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUserName , self::$dbUserPassword);
            }
            catch (PDOException $toto) {
                die ($toto->getMessage());
            }
        }
        return self::$connexion;
    }

    public static function getPokemon(){
        $db = Database::connect();

        $executerRequeteSQL = $db->query("SELECT * FROM pokemon;");

        $recupererPokemon = $executerRequeteSQL;

        return $recupererPokemon;
    }    

    public static function getPokemonById($infosPokemon){
        $db = Database::connect();
        $sql = "SELECT categorie.nom AS nomCategorie, categorie.description AS descriptionCat, competence.nom AS nomCompetence, competence.description AS descriptionComp, habitat.nom AS nomHabitat, habitat.description AS descriptionHabitat, pokemon.description AS description,  pokemon.nom AS nom, pokemon.attack AS attack, pokemon.defence AS defence, pokemon.speed AS speed, pokemon.attack_spe AS attack_spe, pokemon.defence_spe AS defence_spe, pokemon.img_poke AS img_poke, pokemon.generation AS generation, pokemon.version_app AS version_app, pokemon.competence AS competence, pokemon.categorie AS categorie, pokemon.taille AS taille, pokemon.masse AS masse, pokemon.hp AS hp FROM pokemon 
        JOIN habitat ON pokemon.habitat = habitat.id_hab
        JOIN competence ON pokemon.competence = competence.id_comp
        JOIN categorie ON pokemon.categorie = categorie.id_cat
        WHERE num_poke = :id";

        $recupererPokemonByID = $db->prepare($sql);
        $recupererPokemonByID->execute(array('id'=>$infosPokemon));

        return $recupererPokemonByID;
    } 
     

}


?> 