<?php

/*
    Quand vous souhaitez récupérer des données entrées par vos utilisateurs,
    vous allez avoir deux possibilités.

    Ce qui s'appel, deux METHODES
    En gros, deux façons de récupérer les données

    La méthode GET
    La méthode POST

    Toutes les deux permettent de récupérer les données des utilisateurs

    La méthode GET :
        - Les données de l'utilisateur sont transmises DIRECTEMENT depuis l'URL du site

    Par exemple, nous nous trouvons sur le site www.google.fr
        - Vous souhaitez effectuer une recherche
        - Vous entrez la recherche dans le champs
        - Vous validez la recherche
        - La recherche est transmise en GET (dans l'URL)
        https://www.google.fr/search?q=php

        Les données que vous récupérer avec la méthode GET sont associés à des clés
        GET > Permet d'associer des clés a des valeurs
        Avec GET vous pouvez transmettre PLUSIEURS clés et valeurs

        On peut se servir de GET pour récupérer par exemple les données de connexion d'un site
        - Login et mot de passe

    /!\ ATTENTION
        Les données que vous allez envoyer en méthode GET doivent être des données NON SENSIBLES
        (pas de mot de passe ou d'autres données importantes)

    Pour utiliser la méthode GET, il suffit de l'écrire de cette façon :
        $_GET["LaCLef"]

    Permet de RECUPERER les données transmises en GET

*/
// $data = $_GET['data'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupérer des données avec GET et POST</title>
</head>
<body>
<h1>Récupérer des données avec GET</h1>
<?php
// On récupère les données envoyées sur "data"
// $data = $_GET['data'];
// echo "<p> Voici la donnée envoyée : $data </p>";

// On ne devrait pas pouvoir afficher la donnée si elle n'existe pas
// Avant l'affichage, on vérifie si la variable $_GET['data'] existe, si elle est définie

// isset($variable) permet de tester si la variable existe
// empty($variable) permet de tester si une variable EST vide
// !empty($variable) permet de tester si une variable n'est PAS vide

/*
    Sur les verions récentes de PHP, vous n'êtes plus obligé d'utiliser isset
    Si vous utilisez !empty, cela fait les deux tests en même temps
*/
if(isset($_GET["data"]) && !empty($_GET["data"])){
    echo "<p> Voici la donnée envoyée : {$_GET["data"]} </p>";
} else {
    echo "<p>Veuillez saisir une donnée.</p>";
}
?>
<form action="#" method="get">
    <label for="texte">Entrez un texte :</label>
    <input type="text" id="texte" name="data" placeholder="Entrez un texte">

    <input type="submit" value="Envoyer !">
</form>
</body>
</html>