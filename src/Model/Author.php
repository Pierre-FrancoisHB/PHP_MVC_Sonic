<?php

class Author
{
    // ces propriétés doivent avoir exactement le même nom que leur homologue en BDD
    private $id;
    private $name;
    private $footer_order;
    protected $created_at;
    protected $updated_at;


    /**
     * Méthode permettant de rétourner le détail d'un produit
     * en fonction de son identifiant
     *
     * @param int $id
     * @return C
     */
    public function findAuthor()
    {
        // 1) On récupère l'objet PDO
        $pdo = Database::getPDO();

        // 2) On crée la requete Sql + Execution
        $sql = 'SELECT * FROM `type`';
        $pdoStatement = $pdo->query($sql);

        // 3) On récupère le résultat avec la méthode fetch
        // $result = $pdoStatement->fetch(PDO::FETCH_ASSOC);

        // On récupère un résultat qui sera de type objet de la classe Type
        return $pdoStatement->fetchObject(Author::class);
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of footer_order
     */
    public function getFooterOrder()
    {
        return $this->footer_order;
    }

    /**
     * Set the value of footer_order
     */
    public function setFooterOrder($footer_order)
    {
        $this->footer_order = $footer_order;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
