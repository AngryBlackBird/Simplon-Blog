<?php
session_start();
include_once "../../secure/log.php";
include_once "../Modèle/wordOject.php";

if (isset($_POST['article']) & isset($_POST['title']) & isset($_POST['id']) & isset($_SESSION['pseudo']) & isset($_POST['modify'])) :

    $id = $_POST['id'];
    $text = $_POST['article'];
    $title = $_POST['title'];

    $article = new Word($servername, $username, $password, $dbname);
    $modifArticle = $article->modifyWord($title, $text, $id);


    //$selectArticle = $article->selectWordById($id);

    header('Location: ../../Index.php');
  



endif;
