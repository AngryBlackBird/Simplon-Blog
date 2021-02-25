<?php
session_start();

if (isset($_SESSION["pseudo"]) & isset($_POST["delete"])) :



    require "../../secure/log.php";
    require "../Modèle/wordOject.php";

    $idArticle = $_POST["delete"];

    $delete = new Word($servername, $username, $password, $dbname);

    $reponseDelete = $delete->deleteWord($idArticle);


    header('Location: ../Vue/wordAdminView.php');

endif;
