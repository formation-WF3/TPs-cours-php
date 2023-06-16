<?php
/*
    Ecrire une boucle while qui affiche tous les nombres pairs
    de 0 à 100 (inclus)
*/
echo "<h2>Affichage de nombres pairs</h2>";

$nombre = 100;

$i = 0;
while ($i <= 100) {
    echo "$i ";
    $i += 2;
}
echo "<br>";
