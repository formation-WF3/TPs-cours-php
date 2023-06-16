<?php
session_start();
/*
    Vous allez ajouter le code HTML de base (!)
    Vous allez ajouter un formulaire de connexion
        - Login
        - mot de passe

    A la soumission du formulaire :
        - Vous allez vérifier si le login est égal à : mail@contat.com
        - Vous allez vérifier si le mot de passe est égal à : pwd123
*/
$errorMsg = null;
if (!empty($_POST['submit'])) {
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    if (!empty($login) && !empty($pwd)) {
        // Tester si les valeurs sont bonne
        if ($login == "mail@contat.com" && $pwd == "pwd123") {
            $_SESSION['login'] = $login;
        } else {
            $errorMsg = "Vous devez renseigner les bons identifiants";
        }
    }
}

// Si l'utilisateur essaie de se déconnecter
if(!empty($_GET['logout'])){
    if($_GET['logout'] == "oui"){
        session_destroy();
    }
}
/*
    Si le login et le mot de passe ne correspondent pas :
        - Vous allez afficher un message d'erreur

    Si le login et le mot de passe correspondent :
        - Vous allez masquer le formulaire de contact
        - Vous allez inclure un fichier qui contient un titre (h1)
        - Vous allez afficher un lien "Déconnexion"
        - Vous allez enregistrer le login en COOKIE ou en SESSION

    Si l'utilisateur clique sur "Déconnexion" :
        - Vous allez afficher le formulaire de connexion
        - Vous allez supprimer la connexion (variable COOKIE ou SESSION)
*/
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
    if (!empty($_SESSION['login'])) {
        // On est connecté
        include_once('header.php');
        echo "<h1>Le titre a inclure</h1>";
        echo '<a href="?logout=oui">Déconnexion</a>';
    } else {
        // On est pas encore connecté
        ?>

        <form action="#" method="post">
            <div class="mb-3">
                <label for="login" class="form-label">Login :</label>
                <input type="email" name="login" class="form-control" id="login">
            </div>

            <div class="mb-3">
                <label for="pwd" class="form-label">Mot de passe :</label>
                <input type="password" name="pwd" class="form-control" id="pwd">
            </div>

            <input type="submit" name="submit" value="Connexion">
        </form>
        <?= $errorMsg ?>
        <?php
    }
    ?>
</body>
</html>