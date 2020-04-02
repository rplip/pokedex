<?php

namespace App\Models;

class Pokemon
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var int
     */
    private $pv;

    /**
     * @var int
     */
    private $attaque;

    /**
     * @var int
     */
    private $defense;

    /**
     * @var int
     */
    private $attaque_spe;

    /**
     * @var int
     */
    private $defense_spe;

    /**
     * @var int
     */
    private $vitesse;

    /**
     * @var int
     */
    private $numero;

    private $percent;
    
    public static function sortByType($id) {
        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM pokemon_type INNER JOIN pokemon
        ON pokemon_type.pokemon_numero = pokemon.numero
        WHERE pokemon_type.type_id = $id ";

        $pdoStatement = $pdo->query($sql);

        $types = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $types;
    }


    public static function findAll() {

        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM `pokemon` ORDER BY numero";

        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $results;
    }

    public static function findById($id) {

        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM `pokemon` WHERE id = $id";

        $pdoStatement = $pdo->query($sql);

        $result = $pdoStatement->fetchObject(self::class);

        return $result;

    }

    public function getPercent($i) {

        $this->percent = ($i*(100/255));
        
        return $this->percent;
    }

    public static function findName($numero) {

        $number = Pokemon_type::findByNumero($numero);

            $idType = $number[0]->getType_id();
            $pokemonType = Type::findByIdType($idType);
            return ($pokemonType);
    }

    public static function findNameTwo($numero) {

        $number = Pokemon_type::findByNumero($numero);

            if (isset($number[1])) {
            $idType = $number[1]->getType_id();
            $pokemonType = Type::findByIdType($idType);
            return ($pokemonType);
            };
    }

    public static function findByPokemonNumero ($pokemonNumero) {

        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM `pokemon` WHERE numero = $pokemonNumero";

        $pdoStatement = $pdo->query($sql);

        $pokemonByNumero = $pdoStatement->fetchObject(self::class);

        return $pokemonByNumero;
    }

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     *
     * @return  string
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of pv
     *
     * @return  int
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Get the value of attaque
     *
     * @return  int
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Get the value of defense
     *
     * @return  int
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Get the value of attaque_spe
     *
     * @return  int
     */ 
    public function getAttaque_spe()
    {
        return $this->attaque_spe;
    }

    /**
     * Get the value of defense_spe
     *
     * @return  int
     */ 
    public function getDefense_spe()
    {
        return $this->defense_spe;
    }

    /**
     * Get the value of vitesse
     *
     * @return  int
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of numero
     *
     * @param  int  $numero
     *
     * @return  self
     */ 
    public function setNumero(int $numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of numero
     *
     * @return  int
     */ 
    public function getNumero()
    {
        return $this->numero;
    }
}