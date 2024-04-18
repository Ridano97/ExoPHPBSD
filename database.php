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
        $sql = "SELECT * FROM pokemon WHERE num_poke = :id";

        $recupererPokemonByID = $db->prepare($sql);
        $recupererPokemonByID->execute(array('id'=>$infosPokemon));

        return $recupererPokemonByID;
    } 
     

}


?> 