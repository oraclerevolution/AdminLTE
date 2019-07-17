<?php 
require "database.php";

//creation de variable
$coffret = $ville = $localisation = $compteur = $lanternes = $crosses = $supports = $lampes = "";

//fonction de contrôle de champs (faille xss)

function inputVerify($var){

    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);

    return $var;
}

if (!empty($_POST)) {
    $coffret = inputVerify($_POST["coffret"]);
    $ville = inputVerify($_POST["ville"]);
    $localisation = inputVerify($_POST["localisation"]);
    $compteur = inputVerify($_POST["compteur"]);
    $lanternes = inputVerify($_POST["lanternes"]);
    $crosses = inputVerify($_POST["crosses"]);
    $supports = inputVerify($_POST["supports"]);
    $lampes = inputVerify($_POST["lampes"]);

    $db = Database::connect();
        $statement = $db->prepare("INSERT INTO compteurs (coffret, ville, localisation, compteur, lanternes, crosses, supports, lampes) values(?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->execute(array($coffret,$ville,$localisation,$compteur, $lanternes,$crosses, $supports, $lampes));
        Database::disconnect();
        header("Location: ../pages/tables/data.php");
}