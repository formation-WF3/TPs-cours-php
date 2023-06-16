<?php
$config = [
    'db_user' => $_ENV['MYSQL_USER'],
    'db_pass' => $_ENV['MYSQL_PASSWORD'],
    'db_host' => 'mysql',
    'db_name' => $_ENV['MYSQL_DATABASE']
];

$pdo = new PDO('mysql:dbname='. $config['db_name'] .';host=mysql', $config['db_user'], $config['db_pass'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];
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
    <h1>Bienvenue au cours PHP</h1>

    <h2>
        <?php
            // Instructions
            // Autant d'instructions que l'on souhaite
            echo "Mon super titre 2";

            // Double quote (guillemet)
            echo "Suite du titre";

            // Single quote '
            echo 'Le contenu que je veux écrire';

             // Double quote (guillemet)
             echo ("Suite du titre");

             // Single quote '
             echo ('Le contenu que je veux écrire');

            // Ecriture des variables
            // le camel case >
                // Première lettre de la variable en minuscule
                // Chaque première lettre de chaque mot en majuscule
        // $maVariable;
        // $maSuperVariableQuiEstTropLongue;

        ?>
    </h2>

    <?php include '../TP/tp01.php'; ?>
    <br>
    <?php include '../TP/tp02.php'; ?>
    <br>
    <?php include '../TP/tp01-get.php'; ?>
    <br>
    <?php include '../TP/tp01-post.php'; ?>
    <br>
    <?php include '../TP/tp03.php'; ?>
    <br>
    <?php include '../TP/tp04.php'; ?>
    <br>
    <!-- Le TP05 est une page complete qui doit remplacer index.php -->
    <!-- Le TP06 est une page complete qui doit remplacer index.php -->

</body>
</html>
