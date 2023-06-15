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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bonjour</h1>
    <?php
        echo "<p>Lorem ipsum</p>";
    ?>

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
    <?php include '../TP/tp02.php'; ?>

</body>
</html>