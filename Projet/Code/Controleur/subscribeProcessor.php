<?php



class subscribe
{

    private $bdd;
    private $pseudo;
    private $name;
    private $postName;
    private $email;
    private $pass;

    public function __construct($pseudo, $name, $postName, $email, $pass)
    {
        require "../../secure/log.php";
        require "../Modèle/requestObject.php";

        $this->pseudo = $pseudo;
        $this->name = $name;
        $this->postName = $postName;
        $this->email = $email;
        $this->pass = password_hash($pass, PASSWORD_DEFAULT) ;

        $result;
        
        $this->bdd = new resgistration($servername, $username, $password, $dbname);
    }
    public function checkData()
    {
        $result = $this->bdd->selectPseudo($this->pseudo);
        //var_dump($result[0]);
        //var_dump($this->pseudo);
        if ($result[0] != $this->pseudo || $result == false) {
            $this->injectData();
            //var_dump($result);
            return "Compte crée";
        } else {
            return "Pseudo existant";
        }
    }

    private function injectData()
    {
        $result = $this->bdd->injectUser($this->pseudo, $this->name, $this->postName, $this->email, $this->pass);
        //var_dump($result);
    }
}
