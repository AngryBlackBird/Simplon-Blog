<?php

class resgistration  // object qui permet l'inscription & la connection 
{
    private $bdd;

    public function __construct($servername, $username, $password, $dbname)
    {
        try {
            $this->bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        //var_dump($this->bdd);
    }

    public function selectPseudo($pseudo) 
    {
        $alldata  =  $this->bdd->prepare("SELECT pseudo FROM utilisateurs WHERE pseudo = :A");
        $alldata->bindParam(":A", $pseudo);
        $alldata->execute();
        $reponse = $alldata->fetch();
        //var_dump($reponse);
        return $reponse;
    }

    public function selectPassFromUser($pseudo)
    {
        $alldata  =  $this->bdd->prepare("SELECT Pass FROM utilisateurs WHERE pseudo = :A");
        $alldata->bindParam(":A", $pseudo);
        $alldata->execute();
        $reponse = $alldata->fetch();
        //var_dump($reponse);
        return $reponse;
    }

    public function injectUser($pseudo, $name, $postName, $email, $pass)
    {
        try {

            $inject = $this->bdd->prepare("INSERT INTO utilisateurs (Pseudo,Nom,Prenom,Email,Role,Pass) VALUE (:A,:B,:C,:D,'balbal',:E)");
            $inject->bindParam(":A", $pseudo);
            $inject->bindParam(":B", $name);
            $inject->bindParam(":C", $postName);
            $inject->bindParam(":D", $email);
            $inject->bindParam(":E", $pass);
            $inject->execute();

            //var_dump($pseudo);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
}
