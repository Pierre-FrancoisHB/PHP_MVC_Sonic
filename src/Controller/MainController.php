<?php

/**
 * MainController hérite de la classe CoreController
 * ==> On peut donc appeler la méthode show dans la classe MainController
 */
class MainController extends CoreController
{
    /**
     * Méthode permettant l'affichage de la page d'accueil
     *
     * @param array $arguments
     * @return void
     */
    public function showHome($arguments = [])
    {
        // On demande l'affichage de la page src/views/home.tpl.php
        // On aimerait afficher les personnages par ordre alphabétique
        // d'accueil
        $characterModel = new Character();
        $allCharacters = $characterModel->findAll();


        
        // Je transmet à la vue la liste des personnages
        $arguments['allCharacters'] = $allCharacters;

        $this->show('home', $arguments);
    }

   /**
     * Méthode permettant l'affichage de la page authors
     *
     * @param array $arguments
     * @return void
     */
    public function author()
    {
        $authorModel = new Author();
        $authors = $authorModel->findAuthor();

        // On transmet la liste des produits à la vue html
        $arguments['article'] = $authors;
        $this->show('authors', $arguments);
    }

    /**
     * Méthode permettant l'affichage de la page 404
     *
     * @param array $arguments
     * @return void
     */
    public function page404($arguments = [])
    {
        $this->show('404', $arguments);
    }
}
