# Petit projet PHP :fire: :smiley:

This is un first PHP project, achieved with few resources, to test operations with controllers, `AltoRouter`, models and views.

## Contains :

- classes
- heritage
- routes
- _Controllers_
- _Views_
- _Models_
- ...

It has been made with PHP 7.4.9 :muscle:

## Subjet : Sonic :tada:

> This little site is about the cartoon character  **Sonic**, and it consists in 2 pages :

- 1 jhomepage with full range of **Sonic** characters, classed by alphabetic order,
- 1 page containing the 3 firsts **Sonic** video game creators


### Database

The small database is provided in the file `docs/sonic.sql` included in the foalder.

:warning: tablenames are keywords about SQL langage. To avoid issues, i've surrounded the name with backtick `` ` ``
Exeaple : ``SELECT * FROM `matable` ``

An exception for datas needed in the project : datas about the 3 creators of **Sonic** can be founded here :
 - [Hirokazu Yasuhara](https://fr.wikipedia.org/wiki/Hirokazu_Yasuhara)
 - [Yuji Naka](https://fr.wikipedia.org/wiki/Yuji_Naka)
 - [Naoto Ōshima](https://fr.wikipedia.org/wiki/Naoto_%C5%8Cshima)

### Structure du projet

La structure du projet étant similaire au projet _oShop__, vous pouvez, si vous le souhaitez, en récupérer les sources pour les modifier pour correspondre au parcours.  
:warning: Attention, tout le code présent dans vos sources doit être utile au projet. **Il ne doit rester aucun code supperflu**.

La qualité du code est encore plus importante dans ce parcours :

- nom de classes, méthodes, variables claires
- indentation
- commentaires
- **aucun "groupe de code" en doublon**
- application des règles et conventions vues en cours

### Aspect visuel

- **Il n'y a pas d'intégration HTML/CSS demandée**
  - on vous laisse créer les fichiers `header.tpl.php`, `footer.tpl.php`, `home.tpl.php`... selon vos goûts
- **Le plus important, c'est le code, pas la cosmétique** dans ce parcours

### Layout

- En haut de chaque page, on trouvera une navigation contenant des liens vers la page d'accueil et la page des créateurs du jeu.

### Page d'accueil

- Récupérer les données sur les personnages et leur type depuis la base de données
- Afficher les personnages (image, nom, type, description) dans un `<table>`, par ordre alphabétique

### Les créateurs

- Les créateurs ne sont pas dans la base de données, on vous demande de les ajouter *en dur*, en HTML dans votre vue !
- il n'y a qu'une seule page, et cette page affiche les 3 créateurs
- Pour chaque créateur, afficher un titre de niveau 3 et un beau `lorem ipsum` des familles :sunglasses:


### Bonus

- I planned improve display with CSS as soon as possible !
- In the next few weeks, i hope add some others pages to let explain my creativity :bulb:
