<?php
session_start();

require '../Modèle/requestObject.php';
require '../../secure/log.php';

if (isset($_POST["pseudo"]) == true & isset($_POST["pass"]) == true) {

    $pseudo = $_POST["pseudo"];
    $pass = $_POST["pass"];

    $checkData = new resgistration($servername, $username, $password, $dbname);

    $returnPass = $checkData->selectPassFromUser($pseudo);

    var_dump($returnPass);

    if (password_verify($pass, $returnPass[0])) {
        echo "mdp ok";
        $_SESSION["pseudo"] = $pseudo;
        header('Location: ../Vue/connect.php');
    } else {
        $_SESSION["notPseudo"] = "ko";
        header('Location: ../Vue/connect.php');
    }
} else {
    header('Location: ../Vue/connect.php');
}
