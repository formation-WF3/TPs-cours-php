<?php
// Les fonctions natives :
// isset(); -> Vérifier si une variable existe
// empty(); -> Vérifie si la variable est vide
// var_dump(); -> Affiche le contenu et le type des données d'une variable
// setcookie(); -> Défini un cookie

/*
    Une fonction, qu'est-ce que c'est et à quoi ça sert ?
    Une fonction, c'est un bout de code qui peut être réutilisé
    Ca évite la répétition

    Par exemple : une fonction qui permet de dire "Bonjour + nom"

    // Déclarer une fonction
        // Sans paramètre
    Pour déclarer la fonction sans paramètre,
    On utilise le mot-clé 'function' suivi du nom de la fonction
    suivi de parenthèses vide
    Le bloc de code va être délimité par des accolades
*/

// Créer une fonction qui va dire "Bonjour"
function sayHello(){
    // Instructions
    echo "Hello world! <br/>";
}

// Une fonction qui est créée n'est pas encore APPELLEE
// La fonction est créée MAIS n'est pas utilisée
// Pour utiliser une fonction, il faut simplement entrer son nom et mettre les parenthèses
sayHello();
sayHello();

// Déclarer la fonction
// Avec paramètres :
// Même chose que pour la fonction sans paramètre
// A la différence, que dans les parenthèses, vous ajoutez des variables
// Variables que vous souhaitez récupérer pour "traiter"
function greeting($firstname, $lastname){
    echo "Hello $firstname $lastname ! <br/>";
}

// Faire appel à la fonction
greeting("Jean-Louis", "Errante");
greeting("Scaphy", "Marc");

// Fonction avec paramètres obligatoires et optionnels
function addition($nb1, $nb2, $nb3 = 0){
    echo "Le résultat de $nb1 + $nb2 = ".$nb1+$nb2+$nb3;
    echo "<br>";
}

addition(10, 6);
addition(20, 4);
addition(10, 20, 4);

// Retourner un résultat avec une fonction
function multiply($nb1, $nb2){
    return $nb1*$nb2;
}

// $calcul = multiply(10, 2);
// echo $calcul;
echo multiply(6, 3);

$premierCalcul = multiply(6, 2);
$deuxiemeCalcul = $premierCalcul + 4 - multiply(3, 2);

echo "<br>Deuxième calcul = $deuxiemeCalcul <br>";

/*
    Sur les fonction, à partir du moment ou un RETURN est executé,
    le reste de la fonction n'est pas lue
*/
function multiply2(int $nb1, int $nb2) : string
{
    $calcul = $nb1 * $nb2;
    if($calcul > 10){
        return "La valeur est supérieure à 10"; // Si on arrive ici, le reste de la fonction ne sera pas exécuté
    }
    return "La valeur est inférieure à 10";
}

?>
