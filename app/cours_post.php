<?php
/*
    Quand vous souhaitez récupérer des données entrées par vos utilisateurs,
    vous allez avoir deux possibilités.

    Ce qui s'appel, deux METHODES
    En gros, deux façons de récupérer les données

    La méthode GET
    La méthode POST

    Toutes les deux permettent de récupérer les données des utilisateurs

    La méthode POST :
        - Les données de l'utilisateur sont transmises DIRECTEMENT en POST (pas visible par l'utilisateur)

    Par exemple :
       - Vous souhaitez vous connecter sur un site web
       - Vous entrez votre mail
       - Vous entrez votre mot de passe

        Les données que vous récupérer avec la méthode POST sont associés à des clés
        POST > Permet d'associer des clés a des valeurs
        Avec POST vous pouvez transmettre PLUSIEURS clés et valeurs

    Pour utiliser la méthode POST, il suffit de l'écrire de cette façon :
        $_POST["LaCLef"]

    Permet de RECUPERER les données transmises en POST

*/
// $data = $_POST['data'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupérer des données avec POST</title>
</head>
<body>
<h1>Récupérer des données avec POST</h1>
<?php

if(!empty($_POST["data"])){
    echo "<p> Voici la donnée envoyée : {$_POST["data"]} </p>";
} else {
    echo "<p>Veuillez saisir une donnée.</p>";
}
?>
<form action="#" method="post">
    <label for="texte">Entrez un texte :</label>
    <input type="text" id="texte" name="data" placeholder="Entrez un texte">

    <input type="submit" value="Envoyer !">
</form>
</body>
</html>