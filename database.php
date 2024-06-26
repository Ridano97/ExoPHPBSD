 <?php 

/* class Database {

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
     

    public static function addPokemon($nom, $taille, $description, $masse, $hp, $attack, $defence,$speed, $attack_spe, $defence_spe, $img_poke, $generation, $version_app, $habitat, $competence,  $categorie) {
        $db = Database::connect();
        $sql = "INSERT INTO pokemon (nom, taille, description, masse, hp, attack, defence, speed, attack_spe, defence_spe, img_poke, generation, version_app, habitat, competence, categorie)
        VALUES (:nom, :taille, :description, :masse, :hp, :attack, :defence, :speed, :attack_spe, :defence_spe, :img_poke, :generation, :version_app, :habitat, :competence, :categorie)";
        $ajouterPokemon = $db->prepare($sql);
        $ajouterPokemon->execute(array(
            "nom" => $nom,
            "taille" => $taille,
            "description" => $description,
            "masse" => $masse,
            "hp" => $hp,
            "attack" => $attack,
            "defence" => $defence,
            "speed" => $speed, 
            "attack_spe" => $attack_spe,
            "defence_spe" => $defence_spe,
            "img_poke" => $img_poke,
            "generation" => $generation,
            "version_app" => $version_app,
            "habitat" => $habitat,
            "competence" => $competence,
            "categorie" => $categorie
        ));

        echo "POKÉMON AJOUTÉ AU POKÉDEX AVEC SUCCÈS." ;
    }
    public static function addUtilisateur($nom, $mail, $mdp, $date_naissance){
        $db=Database::connect();
        $sql="INSERT INTO utilisateur ('nom, mail, mdp, date_naissance')
        VALUE (:nom, :mail, :mdp, :date_naissance)";
        $ajouterUtilisateur = $db->prepare($sql);
        $ajouterUtilisateur->execute(array(
            "nom" => $nom,
            "mail" => $mail,
            "mdp" => $mdp,
            "date_naissance" => $date_naissance
        ));

    }


}


 */

?> 
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
                self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Pour afficher les erreurs SQL
            }
            catch (PDOException $e) {
                die ("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }
        return self::$connexion;
    }

    public static function getPokemon(){
        $db = self::connect();
        $executerRequeteSQL = $db->query("SELECT * FROM pokemon;");
        return $executerRequeteSQL;
    }    

    public static function getPokemonById($id_pokemon){
        $db = self::connect();
        $sql = "SELECT categorie.nom AS nomCategorie, categorie.description AS descriptionCat, competence.nom AS nomCompetence, competence.description AS descriptionComp, habitat.nom AS nomHabitat, habitat.description AS descriptionHabitat, pokemon.description AS description,  pokemon.nom AS nom, pokemon.attack AS attack, pokemon.defence AS defence, pokemon.speed AS speed, pokemon.attack_spe AS attack_spe, pokemon.defence_spe AS defence_spe, pokemon.img_poke AS img_poke, pokemon.generation AS generation, pokemon.version_app AS version_app, pokemon.competence AS competence, pokemon.categorie AS categorie, pokemon.taille AS taille, pokemon.masse AS masse, pokemon.hp AS hp FROM pokemon 
        JOIN habitat ON pokemon.habitat = habitat.id_hab
        JOIN competence ON pokemon.competence = competence.id_comp
        JOIN categorie ON pokemon.categorie = categorie.id_cat
        WHERE num_poke = :id";
        $recupererPokemonByID = $db->prepare($sql);
        $recupererPokemonByID->execute(array('id' => $id_pokemon));
        return $recupererPokemonByID;
    } 

    public static function addPokemon($nom, $taille, $description, $masse, $hp, $attack, $defence,$speed, $attack_spe, $defence_spe, $img_poke, $generation, $version_app, $habitat, $competence,  $categorie) {
        $db = self::connect();
        $sql = "INSERT INTO pokemon (nom, taille, description, masse, hp, attack, defence, speed, attack_spe, defence_spe, img_poke, generation, version_app, habitat, competence, categorie)
        VALUES (:nom, :taille, :description, :masse, :hp, :attack, :defence, :speed, :attack_spe, :defence_spe, :img_poke, :generation, :version_app, :habitat, :competence, :categorie)";
        $ajouterPokemon = $db->prepare($sql);
        $ajouterPokemon->execute(array(
            "nom" => $nom,
            "taille" => $taille,
            "description" => $description,
            "masse" => $masse,
            "hp" => $hp,
            "attack" => $attack,
            "defence" => $defence,
            "speed" => $speed, 
            "attack_spe" => $attack_spe,
            "defence_spe" => $defence_spe,
            "img_poke" => $img_poke,
            "generation" => $generation,
            "version_app" => $version_app,
            "habitat" => $habitat,
            "competence" => $competence,
            "categorie" => $categorie
        ));

        echo "POKÉMON AJOUTÉ AU POKÉDEX AVEC SUCCÈS." ;
    }

    public static function addUtilisateur($nom, $mail, $mdp, $date_naissance){
        $db = self::connect();
        $sql = "INSERT INTO utilisateur (nom, mail, mdp, date_naissance) VALUES (:nom, :mail, :mdp, :date_naissance)";
        $ajouterUtilisateur = $db->prepare($sql);
        $ajouterUtilisateur->execute(array(
            "nom" => $nom,
            "mail" => $mail,
            "mdp" => $mdp,
            "date_naissance" => $date_naissance
        ));
    }


    /* public static function connectUtilsateur($nom, $mdp){
        $db = self::connect();
        $sql = "SELECT nom, mdp FROM utilisateur ";
        $connecterUtilisateur = $db->prepare($sql);
        $connecterUtilisateur->execute(array(
        "nom" => $nom,
        "mdp" => $mdp
        ));
    } */

    public static function connectUtilisateur($nom, $mdp) {
        $db = self::connect();
        $sql = "SELECT * FROM utilisateur WHERE nom = :nom";
        $resultat = $db->prepare($sql);
        $resultat->execute(array('nom' => $nom));
        $utilisateur = $resultat->fetch(PDO::FETCH_ASSOC);
    
        // Vérifie si l'utilisateur existe et si le mot de passe est correct
        if ($utilisateur && password_verify($mdp, $utilisateur['mdp'])) {
            // Retourne les informations de l'utilisateur connecté
            return $utilisateur;
        } else {
            // Retourne null si l'utilisateur n'existe pas ou si le mot de passe est incorrect
            return null;
        }
    }
    
}
?>