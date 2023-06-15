<?php 
/*
    Echanger la valeur de deux variables

    Vous souhaitez échanger le contenu de deux verres

    Vous possédez un verre rempli de coca, sur lequel il y a écrit coca
    Vous possédez un verre rempli de grenadine, sur lequel il y a écrit grenadine

    Vous souhaitez avoir la grenadine dans le verre de coca
    Vous souhaitez avoir le coca dans le verre de grenadine
*/
$coca = "Coca";
$grenadine = "Grenadine";

echo "Le verre de coca contient $coca et le verre de grenadine contient $grenadine <br>";

// Vous faites l'échange des valeurs

// Echange par destructuration
[$coca, $grenadine] = [$grenadine, $coca];

echo "Maintenant, le verre de coca contient $coca et le verre de grenadine contient $grenadine <br>";

$variableA = 12;
$variableB = 15;

echo "La variableA contient $variableA et la variableB contient $variableB <br/>";
// La variableA contient 12 et la variableB contient 15

$variableC = $variableA; // Variable C = 12; 
$variableA = $variableB; // Variable A = 15; 
$variableB = $variableC; // Variable B = 12;

echo "La variableA contient $variableA et la variableB contient $variableB <br/>";
// La variableA contient 15 et la variableB contient 12


// Permutation par destructuration = equivalent aux lignes 35, 36 et 37 réunies
[$variableA, $variableB] = [$variableB, $variableA];

// Si ici on fait un echo, on aura à nouveau les valeurs du début
echo "La variableA contient $variableA et la variableB contient $variableB <br/>";
// Affichera :
// La variableA contient 12 et la variableB contient 15

?>