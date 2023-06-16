<?php
/*
    Avec PHP vous pouvez ajouter un fichier à un autre fichier

    En gros, vous pouvez constituer un fichier composé de plusieurs fichiers

    Architecture d'une page web :
        - Header
        - Main
        - Footer

    Quelle est la carctéristique principale d'un header et d'un footer ?
        - C'est les mêmes sur chaque page du site
        - Ca apparait sur chacune des pages du site

    L'inclusion de fichier (4 possibilités) :
        - include
        - require
        - include_once
        - require_once

    La version _once indique au code de n'inclure le fichier QUE s'il n'est pas DEJA inclu

    Include :
        - Permet d'inclure un fichier
        - Si le fichier n'est PAS trouvé, le programme va simplement passer à la suite, votre page va continuer à s'afficher. Le reste de la page va s'afficher.
        - Selon la configuration de votre server, vous allez avoir un warning qui s'affiche

    Require :
        - Permet d'inclure un fichier
        - Si le fichier n'est PAS trouvé, le programme va arrêter son exécution
        - Vous allez avoir un beau message d'erreur qui s'affiche

*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusion de fichiers</title>
</head>
<body>
<?php
// On ajoute le header
include_once('header.html');
?>

<main>
    <h1>Contenu de la page du site</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis veritatis laudantium quae dolore tempora. Consectetur quia dolores doloribus culpa nisi molestiae id sint facilis optio. Debitis quibusdam beatae minus reiciendis?</p>
</main>
</body>
</html>
