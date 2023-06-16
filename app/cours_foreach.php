<?php
/*
    La boucle foreach (pour chaque) est essentiel pour parcourir un tableau
    Grâce à cette boucle, il est possible d'obtenir soit la valeur, soit la clé
    Il est également possible d'obtenir la pair clé/valeur

    Foreach prend en premier paramètre un tableau
    En deuxième paramètre, on va nommer ce que contient le tableau

    La boucle foreach peut prendre un troisième paramètre
    on peut lui dire de récupérer la clé ET la valeur = utile pour les tableau associatif

Tableau indexé :
0   1   2   3 (indice)
12  15  14  13 (valeur)

Tableau associatif :
Jean    Paul    Jane    Julie (clé)
12      15      14      13    (valeur)

Pour afficher les données des tableaux, on doit les afficher une a une
*/
// echo $monTableau[0];
// echo $monTableau[1];
// echo $monTableau[2];

// Foreach pour un tableau indexé
$notes = array(12, 15, 14, 13);
foreach($notes as $n){
    // echo "La note : $n <br>";
}

// foreach (tableau AS (en tant que) VariableQueVousDesirez)
foreach($notes as $note){
    echo "La note : $note <br>";
}

// Tableau associatif
$notes2 = array(
    "Jean" => 12,
    "Paul" => 15,
    "Jane" => 14,
    "Julie" => 13
);

foreach($notes2 as $cle => $valeur){
    // echo "La note de $cle est $valeur/20 <br/>";
}

foreach($notes2 as $key => $value){
    // echo "La note de $key est $value/20 <br/>";
}

foreach($notes2 as $k => $v){
    echo "La note de $k est $v/20 <br/>";
}

?>

