<?php

/**
 * Un Modèle est la représentation d'une table SQL 
 * sous forme de classe PHP
 * 
 * Class Product ==> Table product
 */
class Character
{
    /**
     * Les propriétés du Models portent le même nom que les 
     * colonnes de la table SQL
     */

    // $id ==> colonne id
    // Getter only ==> Jamais de setter pour cette propriété id
    private $id;

    private $name;

    private $description;

    private $picture;

    private $created_at;

    private $updated_at;

    private $type_id;

    // Pour la propriété type_name
    // je ne crée qu'un getter pas des setter (inutile)
    // car n'est pas une "vrai colonne" mais un alias
    private $type_name;

    

 

  
    /**
     * Méthode permettant de récupérer tous les personnages
     *
     */
    public function findAll()
    {
        // 1) On récupère un objet PDO
        // Une méthode statique n'a pas besoin de new Database
        // On peut l'appeler directement à partir de la classe
        //$pdo = new PDO('dsn', 'login', 'mot de passe', 'options');
        // Connexion à MySQL via PDO
        $pdo = Database::getPDO();

        // 2) On execute la requete
        $sql = 'SELECT `type`.name as type_name, `character`.*
        FROM `character`
        INNER JOIN `type`
        ON `type`.id = `character`.type_id
        ORDER BY `character`.name';

        $pdoStatement = $pdo->query($sql);

        // 3) On récupère les informations (produits) sous forme de tableau
        //$products = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        $allCharacters = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Character::class);


        // 4) On retourne la liste des produits
        return $allCharacters;

         }




    //GETTERS 
    //ET SETTERS(sauf pour id et type_name)

    
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
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of created_at
     */ 
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */ 
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */ 
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */ 
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get the value of type_name
     */ 
    public function getType_name()
    {
        return $this->type_name;
    }

    
    }

    
