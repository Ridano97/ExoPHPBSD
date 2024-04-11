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
                self::$connexion = new PDO ("mysql:host" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUserName , self::$dbUserPassword);
            }
            catch (PDOException $toto) {
                die ($toto->getMessage());
            }
        }
        return self::$connexion
    }

    public static function getPokemon() {
        $db = Database::connect();
                            /*éxécuter*/
        $executerRequeteSQL = $db->query("SELECT num_poke, nom, taille FROM pokemon 
        WHERE num_poke = 1;");

        $recupererRequetePokemon = $excuterRequeteSQL;

        return $recupererRequetePokemon;

    }

}


?> 