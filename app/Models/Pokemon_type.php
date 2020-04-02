<?php

namespace App\Models;

class Pokemon_type {

    /**
     * @var int
     */
    private $id;

        /**
     * @var int
     */
    private $pokemon_numero;

        /**
     * @var int
     */
    private $type_id;

    public static function findByNumero($numero) {

        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM `pokemon_type` WHERE pokemon_numero = $numero";

        $pdoStatement = $pdo->query($sql);

        $number = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $number;
    }

    public static function findByTypeId($typeId) {

        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM `pokemon_type` WHERE type_id = $typeId";

        $pdoStatement = $pdo->query($sql);

        $typeById = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $typeById;
    }

    public static function findPokemonNumero ($typeId) {


            $array = self::findByTypeId($typeId);
            $idNumero = $array[1]->getPokemon_numero();
            return ($idNumero);
        

    }

    public static function findTypeName($numero) {

        //$id = $this->getType_id();
        $name = Type::findByIdType($numero);
        return $name;
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
     * Get the value of pokemon_numero
     *
     * @return  int
     */ 
    public function getPokemon_numero()
    {
        return $this->pokemon_numero;
    }

    /**
     * Set the value of pokemon_numero
     *
     * @param  int  $pokemon_numero
     *
     * @return  self
     */ 
    public function setPokemon_numero(int $pokemon_numero)
    {
        $this->pokemon_numero = $pokemon_numero;

        return $this;
    }

    /**
     * Get the value of type_id
     *
     * @return  int
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @param  int  $type_id
     *
     * @return  self
     */ 
    public function setType_id(int $type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
}