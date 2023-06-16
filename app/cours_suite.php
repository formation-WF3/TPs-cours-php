<?php
/*
    La boucle for, permet d'effectuer X fois un nombre d'opération

    La boucle for est utilisée lorsqu'on connait à l'avance le nombre d'itération

    for(variable de compteur ; condition a tester ; modification du compteur) {
        // Instructions
    }

    Je veux que ma boucle se lance autant de fois que nécessaire jusqu'à arriver
    au nombre spécifié sur une variable (par exemple : 8)
*/
// $i = $i + 1;
// $i += 1; // équivalent à la ligne au dessus
// $i++; // Ajoute 1 à la variable
// On peut également faire une décrémentation de la même façon :
// $i--; // retire 1 à la variable
// $number = 8;
// for($i = 1; $i <= $number; $i++) {
//     echo "La variable i = $i <br/>";
// }

/*
    La boucle while (tant que)

    La boucle while PEUT être utilisée lorsqu'on connait à l'avance le nombre d'itération (comme for)
    La boucle while doit être utilisée lorsqu'on ne connait PAS à l'avance le nombre d'itération

    Par exemple, au lieu de s'arrêter lorsque l'amorce atteint un nombre,
    on peut s'arrêter lorsque l'amorce est égale à quelque chose (par exemple, un mot)

    // Ecrire une boucle While :

    // Faire une amorce (variable qui va servir à faire la condition)
    $i = 0;

    while (condition(s)) {
        // Instructions

        // Modifier l'amorce (modification de la variable qui se trouve dans le test de la condition)
    }
*/
$number = 8;
$i = 1; // Amorce

while ($i <= $number) { // Condition
    echo "La variable i = $i <br/>";

    $i++;  // Modification de l'amorce
}

$word = "Pas ça";

while ($word != "Oui c'est ça"){
    // Fait quelque chose
    echo "Ce n'est pas encore ça, word est égal à $word <br/>";

    // On peut effectuer un test et si le test est vrai, on change "word" par "Oui c'est ça"
    if($word == "Pas ça"){
        $word = "Pas encore ça";
    } elseif($word == "Pas encore ça") {
        $word = "Toujours pas ça";
    } elseif($word == "Toujours pas ça"){
        $word = "Oui c'est ça";
    }
}

/*
    La boucle for et la boucle while ne vont pas forcément s'executer

    Par contre, la boucle do...while va s'executer au moins une fois
    QUOI QU'IL ARRIVE
    Même si la condition n'est pas remplie

    Ecrire la boucle do while :

    do {
        // Instructions
    } while(condition);
*/
$i = 101;
do {
    echo "Nombre pair avec DoWhile : $i <br/>";
    $i += 2;
} while($i <= 100);

/*
    PHP par défaut, poss-de des constantes qui sont déjà prédéfinie
    PHP_VERSION => Connaître la version de PHP utilisée
    DIRECTORY_SEPARATOR => Le caractère séparateur du répertoire du système d'exploitation

    La portée d'une constante est globale
    On peut donc y accéder sur tout le script
    On peut utiliser également les constantes dans les fonctions
*/
echo "Version de PHP utilisée : ".PHP_VERSION."<br>";
echo "Séparateur de répertoire : ".DIRECTORY_SEPARATOR."<br>";

$url = "src".DIRECTORY_SEPARATOR."images";
?>