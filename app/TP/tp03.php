<?php
/*
    Ecrire une boucle for qui affiche tous les nombres impairs
    de 0 à 100 (inclu)
*/
echo "<h2>Affichage de nombres impairs</h2>";

$nombre = 100;

for($i = 1; $i <= $nombre; $i += 2) {
    echo "$i ";
}
echo "<br>";
