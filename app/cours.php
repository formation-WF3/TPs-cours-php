<?php
$prenom = "Jean-Louis";

// Avec une concaténation
    // Concaténation : ajouter quelque chose à quelque chose d'autre
// echo "<h1>Bonjour " .$prenom. " !</h1>";

// Lorsqu'on utilise les DOUBLES quotes, le système SAIT qu'il doit executer
// les insructions de variables (ce qui commence par $)
// echo "<h1>Bonjour $prenom !</h1>";

// Lorsqu'on utilise les SINGLE quotes, le système n'execute PAS le code
// echo '<h1>Bonjour $prenom !</h1>';

// Utiiliser la concaténation
echo '<h1>Bonjour ' .$prenom. ' !</h1>';

$numA = 12;
$numB = 6;

$result = $numA + $numB; // 18

echo "Le résultat du calcul $numA + $numB est $result";

// Un tableau indexé (a indice)
/*
    Un type de variable qui permet de stocker plusieurs données

    Je souhaite stocker les notes des étudiants d'une classe

        Notes Des Etudiants
    0       1       2       3       (index/indice)
    12      15      14      13      (valeurs)

    Un tableau indexé commence TOUJOURS à l'index 0

    [ 12 ] [ 15 ] [ 14 ] [ 13 ]
*/
    // Un tableau c'est une variable
    $monTableau[0] = 12;
    $monTableau[1] = 15;
    $monTableau[2] = 14;
    $monTableau[3] = 13;
    $monTableau[4] = "Ma chaine de caractère";

    // Afficher le contenu de l'élève 4
    echo $monTableau[3]; // Affichera : 13

    // Autre façon de définir un tableau avec toutes les données
    $monTableau2 = array(12, 15, 14, 13, "Ma chaine"); // equivalent aux lignes 40 à 43 inclu

    // Afficher le contenu du tableau a l'indice 2
    $indice = 2;
    echo $monTableau[$indice]; // Affichera : 14

    /*
        Tableau associatif :
            - Nous permet d'associer des valeurs à des clés

             Notes Des Etudiants
    Jules   Maxence     Seb     Coumba  (clés)
    12      15          14      13      (valeurs)

    */
    // $notes["Jules"] = 12;
    // $notes["Maxence"] = 15;
    // $notes["Seb"] = 14;
    // $notes["Coumba"] = 13;

    // // Je souhaite afficher la note de Seb
    // echo $notes["Seb"]; // Affichera 14

    $notes = array(
        "Jules" => 12,
        "Maxence" => 15,
        "Seb" => 14,
        "Coumba" => 13
    );

    // destructuration sur un tableau associatif :
        // Vous devez associer les "clé" à vos variables
    ['Coumba' => $a, 'Seb' => $b, 'Jules' => $c, 'Maxence' => $d] = $notes;

    // Destructuration sur un tableau indexé
    // $notes = array(12, 15, 14, 13);
    // [$a, $b, $c, $d] = $notes;

    echo "<br/>Valeur de b : $b";

    // Equivalent à la ligne 80 :
    // $a = $notes['Jules'];
    // $b = $notes['Maxence'];

    // // echo $c; // Affichera : 14

    // // Au lieu de faire comme cela
    // echo $notes['Seb'];

    // // Avec la destructuration, on peut afficher cela :
    // echo $seb;

    // // Je veux afficher le contenu de Coumba :
    // $cle = "Coumba";

    // echo $notes[$cle]; // Affichera : 13

    // echo "<br/><br/>";
    // echo "<h2>Opérateurs mathématiques</h2>";

    // $calcul = "18" + 4;

    // echo $calcul;

    $numA = 12; // integer (nombre entier)
    $numB = "12"; // string (chaine de caractère)

    /*
        1 = signifie "Assigne une valeur à"
        2 = Signifie "Teste une valeur "
        3 = Signifie "Teste la valeur ET le type"
    */

    // Ce code ne sera pas exécuté car "12" n'est pas égal à 12 (on sera dans le else)
    if($numA == $numB){
        // Sera exécuté seulement si on entre dans le if, ce qui n'est PAS le cas ici
        echo "On entre dans la condition";
    } else {
        echo "On n'entre pas dans la condition";
    }

    // Pour tester si quelque chose est différent, on écrit !=
    /*
        En règle générale, dans le code pour tester l'inverse de quelque chose, on met ! devant
    */

    // Un fonction qui permet de savoir si une variable est vide : empty(maVariable)
    // $varB;

    // On entre dans la condition si la variable est vide
    if(empty($varB)){
        // Faire quelque chose
    }

    // empty($varB) : test si la variable EST VIDE
    // !empty($varB) : test si la variable N'EST PAS VIDE

    // Tester si deux variables sont différentes : != : Différent de
    if($numA != $numB){
        // Faire quelque
    }
