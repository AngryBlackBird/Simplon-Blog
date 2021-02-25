<?php

class Word // object qui gere toute les requetes SQL des article
{
    private $bdd;

    public function __construct($servername, $username, $password, $dbname)
    {
        try {
            $this->bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }


    public function insertWord($titre, $data, $pseudo)
    {
        try {

            $inject = $this->bdd->prepare("INSERT INTO articles (Titre,Contenu,Pseudo_user,Publication) VALUE (:A,:B,:C, NOW())");
            $inject->bindParam(":A", $titre);
            $inject->bindParam(":B", $data);
            $inject->bindParam(":C", $pseudo);

            $inject->execute();
           // var_dump($titre);
            //var_dump($data);
            //var_dump($pseudo);
            return $inject;
        } catch (Exception $e) {
            return ('Erreur : ' . $e->getMessage());
        }
    }

    public function selectWordByDate($date1, $date2)
    {
        $alldata  =  $this->bdd->prepare("SELECT Titre, Contenu, id FROM articles WHERE Publication BETWEEN :A AND :B ORDER BY id ");
        $alldata->bindParam(":A", $date1);
        $alldata->bindParam(":B", $date2);
        $alldata->execute();
        $reponse = $alldata->fetchAll();
        //var_dump($reponse);
        return $reponse;
    }


    public function selectWordByID($id)
    {
        $alldata  =  $this->bdd->prepare("SELECT Titre, Contenu, id FROM articles WHERE id = :A ORDER BY id");
        $alldata->bindParam(":A", $id);
        $alldata->execute();
        $reponse = $alldata->fetch();
        //var_dump($reponse);
        return $reponse;
    }

    public function deleteWord($idArticle)
    {
        $delete  =  $this->bdd->prepare("DELETE FROM articles WHERE id = :A");
        $delete->bindParam(":A", $idArticle);
        $delete->execute();
        var_dump($delete);
        return $delete;
    }

    public function modifyWord($title, $article, $id)
    {
        $modify = $this->bdd->prepare("UPDATE articles SET Titre = :A ,  Contenu = :B  WHERE id = :C");
        $modify->bindParam(":A", $title);
        $modify->bindParam(":B", $article);
        $modify->bindParam(":C", $id);
        $modify->execute();
        var_dump($modify);
        return $modify;
    }
}
