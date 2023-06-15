<?php

$varA = "12"; // string (chaine de caractères)
$varB = 12; // integer (nombre entier)

// le double égal (==) tester UNIQUEMENT la correspondance de valeur
if($varA == $varB){
    // Cette condition SERA exécutée
}

// Le triple égal (===) tester la valeur ET le type
// Il faut que ce soit STRICTEMENT EGAL
if($varA === $varB){
    // Cette condition ne sera PAS exécutée
}


// Conditions simples
$nb1 = 15;
$nb2 = 12;

if($nb1 > $nb2 && $nb1 > 18){
    echo "Le nombre 1 est supérieur au nombre 2 <br/>";
} elseif($nb1 === $nb2){
    echo "Le nombre 1 est strictement égal au nombre 2 <br/>";
} else {
    echo "On n'entre pas dans la condition <br>";
}