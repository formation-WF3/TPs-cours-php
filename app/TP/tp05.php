<?php
/*
    Vous allez ajouter le code HTML de base pour une page web (!)
    Vous allez ajouter un titre H1 (Veuillez renseigner les informations)
    Vous allez y ajouter un formulaire qui vous demande :
        - Votre prénom
        - Votre nom
        - Votre age
    Lorsque l'utilisateur renseigne les informations et valide le formulaire
    vous allez envoyer les données en méthode POST
    Une fois que les données ont été envoyées,
    vous allez vérifier si elles ne sont pas vide
    si les données sont vide, vous allez afficher un message d'erreur
    si les données sont remplies, vous allez les stocker sur les cookies
    Une fois les données stockées sur les cookies
    Vous allez afficher :
        "Bonjour PRENOM NOM, tu as AGE ans"
    Exemple :
        "Bonjour Jean-Louis ERRANTE, tu as 36 ans"
    Informations importantes :
        - Le message d'erreur doit s'afficher sous le champ qui pose problème
        - Le message "Bonjour..." doit s'afficher à la place du H1 de base
*/
// Est ce que la variable post est définie ?
// Si elle est définie, ça signifie que l'utilisateur a envoyer le formulaire
$errorPrenom = null;
$errorNom = null;
$errorAge = null;
/* Suppression de tous les cookies s'il y en a
if (count($_COOKIE) != 0) {
    foreach($_COOKIE as $cookie_name => $cookie_value){
        unset($_COOKIE[$cookie_name]);
        setcookie($cookie_name, '', time() - 4000, '/');
    }
}
*/
// Vérifie si le formulaire a été envoyé
// if($_SERVER["REQUEST_METHOD"] == "POST") {
if (!empty($_POST['submit'])) {
    $isAllFieldOk = true;
    // Est ce que le prénom a été renseigné ?

    if (empty($_POST['firstname'])) {
        $errorPrenom = "<p>Vous devez renseigner le prénom</p>";
        $isAllFieldOk = false;
    }

    if (empty($_POST['lastname'])) {
        $errorNom = "<p>Vous devez renseigner le nom</p>";
        $isAllFieldOk = false;
    }

    if (empty($_POST['age'])) {
        $errorAge = "<p>Vous devez renseigner l'age</p>";
        $isAllFieldOk = false;
    }

    // if($isAllFieldOk === true){
    if ($isAllFieldOk) {
        // Si on arrive ici, ca veut dire qu'il n'y a pas d'erreur
        // On peut enregistrer les données sur les cookies
        // clé, valeur, durée de vie
        setcookie("prenom", $_POST['firstname'], time() + 3600);
        setcookie("nom", $_POST['lastname'], time() + 3600);
        setcookie("age", $_POST['age'], time() + 3600);
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php
    // Si les cookies sont définis, affiche Bonjour Prenom....
    if (!empty($_COOKIE['prenom'])) {
        echo "<h1>Bonjour {$_COOKIE['prenom']} {$_COOKIE['nom']}, tu as {$_COOKIE['age']} ans</h1>";
    } else {
        // Sinon affiche "Veuillez renseigner les informations
        echo "<h1>Veuillez renseigner les informations</h1>";
    }

    ?>

    <form action="#" method="post">
        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom :</label>
            <input type="text" name="firstname" class="form-control" id="prenom" value="<?php if(!empty($_POST['firstname'])) echo $_POST['firstname']; ?>">
            <?php echo $errorPrenom; ?><br>
        </div>

        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" name="lastname" class="form-control" id="nom" value="<?php if(!empty($_POST['lastname'])) echo $_POST['lastname']; ?>">
            <?= $errorNom ?><br>
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age :</label>
            <input type="number" name="age" class="form-control" id="age" value="<?php if(!empty($_POST['age'])) echo $_POST['age']; ?>">
            <?php echo $errorAge; ?><br><br>
        </div>

        <input type="submit" class="btn btn-info" name="submit" value="Envoyer">
    </form>
</body>
</html>
