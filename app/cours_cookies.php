<?php
/*
   Déclaration d'un cookie

   // clé  valeur  date d'expiration

   La définition d'un cookie se fait avec la fonction setcookie()

   C'est une fonction qui prend 3 paramètres
   Dans une fonction, les paramètres sont séparés par des virgules

   // clé  valeur  date d'expiration
   setcookie(clé, valeur, date_expiration);
*/

// Je vais enregistrer mon prénom dans les cookies
// Créer un cookie qui expire dans une heure
// clé       valeur        date d'expiration (1h)
setcookie("prenom", "Jean-Louis", time()+3600);
setcookie('nom', "Errante", time()+3600);

// Les cookies sont donc sur la superglobale $_COOKIE
//  $_COOKIE['nomDeLaCle'];

// Récupérer les cookies
echo "Ton prénom c'est : {$_COOKIE['prenom']} <br>";
echo "Ton nom c'est : {$_COOKIE['nom']} <br>";
?>