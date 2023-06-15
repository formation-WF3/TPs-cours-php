<?php
/*
    Créer un programme qui demande une valeur entière et qui affiche son double si cette donnée est inférieur à un seuil
        - Le seuil doit être défini dans une variable
        - La valeur doit être entrée directement dans une variable

    EXEMPLE :
        le seuil : 10
        la variable : 5

        Affichera :
            10 (5*2)

    AUTRE EXEMPLE :
        le seuil : 10
        la variable : 20

        Affichera :
            20

    Pour cela, vous allez entrer la valeur en dur (directement sur la variable)
    Vous allez devoir utiliser les conditions
*/
function calculDouble($valeur, $seuil) {
    if ($valeur < $seuil) {
        return $valeur * 2;
    }
    return $valeur;
}

$valeur = 5;
$seuil = 10;

echo "Le seuil est : $seuil<br>";
echo 'La valeur est : ' . calculDouble($valeur, $seuil) . "<br>";

$valeur = 20;

echo "Le seuil est : $seuil<br>";
echo 'La valeur est : ' . calculDouble($valeur, $seuil) . "<br>";
