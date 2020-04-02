<?php

namespace App\Models;

class Type {

    private $id;
    private $name;
    private $color;

    public static function findByIdType($id) {

        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM `type` WHERE id = $id";

        $pdoStatement = $pdo->query($sql);

        $name = $pdoStatement->fetchObject(self::class);

        return $name;
    }

    public static function findAllTypes() {

        $dsn = 'mysql:dbname=pokedex;host=localhost;charset=UTF8';
        $user = 'pokedex';
        $pwd = 'pokedex';
        $pdo = new \PDO($dsn, $user, $pwd);

        $sql = "SELECT * FROM `type`";

        $pdoStatement = $pdo->query($sql);

        $types = $pdoStatement->fetchAll(\PDO::FETCH_CLASS, self::class);

        return $types;

    }

 

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}