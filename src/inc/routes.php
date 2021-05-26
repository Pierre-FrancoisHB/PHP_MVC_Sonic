<?php
// Liste des routes de l'application

// ======================= PAS TOUCHE (Code de notre Framework) =====================
// 1) On créé une nouvelle instance de classe AltoRouter
$router = new AltoRouter();

// 2) On précise à AltoRouter à partir d'ou il doit considérer une url
// comme étant une route potentielle
$router->setBasePath($_SERVER['BASE_URI']);
// ======================= FIN Du PAS TOUCHE à PARTIR D'ici (Code du Framework) ====================


// 3) Mapping de routes
// Arguments : method, route, target, name

// Route pour la page d'accueil
$router->map(
    // 2 possilités (meme si y en plusieurs)
    // GET : si on veut afficher des données (html)
    // POST : si on veut sauvegarder des données 
    'GET', // Méthodes HTTP : GET, POST, ...
    '/', // A quelle URL cette route sera liée
    [
        'controller' => 'MainController',
        'method' => 'showHome',
           ],
    // Nom du controller - Nom de la méthode
    'main-showHome' // Nom unique (identifiant) de la route
);

// Route pour la page Mentions légales
$router->map(
    'GET', // Méthode HTTP : GET, POST, ...
    '/mentions-legales', // A quellle URL cette route sera liée
    [
        'controller' => 'MainController',
        'method' => 'legalMentions',
        'title' => 'Mentions légales'
    ],
    'main-legalmentions' // Nom unique (identifiant) de la route
);



// Route pour afficher les auteurs
// Exemples d'URL : /catalogue/marque/2/,  /catalogue/marque/3,  /catalogue/marque/12, ... où le numéro correspondant l'ID d'une marque


$router->map(
    'GET', // Méthode HTTP : GET, POST, ...

    // 
    '/authors', // A quellle URL cette route sera liée
    [
        'controller' => 'MainController',
        'method' => 'author',
    ],
    'author-author' // Nom unique (identifiant) de la route
);


// La méthode match() permet de faire la comparaison entre ce qui est saisi
// dans l'URL du navigateur, et ce qui est décrit dans nos routes
// a) Si la route ne match avec ce qu'on saisi dans l'url, alors on $match = false
// a) Si la route match avec ce qu'on saisi dans l'url, alors on $match = tableau associatif
$match = $router->match();

// On veut générer des routes du genre : /product/3
//$urlProduct = $router->generate('catalog-product', ['id' => 3]);

// /product/2
//$urlProduct = $router->generate('catalog-product', ['id' => 2]);

// /product/5
//$urlProduct = $router->generate('catalog-product', ['id' => 5]);

$urlMentions = $router->generate('main-legalmentions');


