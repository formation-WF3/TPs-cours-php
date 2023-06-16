<?php
// Je veux utiliser les sessions
session_start();

// J'enregistre une session :
$_SESSION["prenom"] = "Jean-Louis";
$_SESSION["nom"] = "Errante";
$_SESSION["age"] = 36;

// $_SESSION["ville"] = $_POST["ville"];

// echo $_SESSION["prenom"]; // Affichera : Jean-Louis

// J'ai quelles données dans ma variable $_SESSION ?
// Il est possible d'afficher toutes les données grâce à une petite fonction :
var_dump($_SESSION);

setcookie("ville", "Besse-Sur-Issole", time()+3600*24);

var_dump($_COOKIE);

?>

