<?php
session_start();

if (isset($_POST["title"]) & isset($_POST["editor1"]) & isset($_SESSION["pseudo"])) {



    $titre = $_POST["title"];
    $data = $_POST["editor1"];
    $pseudo = $_SESSION["pseudo"];

    require "../../secure/log.php";
    require "../Modèle/wordOject.php";

    $insertData = new word($servername, $username, $password, $dbname);

   $test =  $insertData->insertWord($titre, $data, $pseudo);
    var_dump($test);

   header('Location: ../Vue/wordAdminView.php');
} else {
    header('Location: ../Vue/wordAdminView.php');
}
