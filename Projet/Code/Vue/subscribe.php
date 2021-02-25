<?php
include "header-footer/header.php"
?>
<div class="containerFrom">
    <form action="../Vue/subscribe.php" method="POST">

        <div class="form-control">
            <input name="pseudo" type="text" required />
            <label>Votre Pseudo</label>
        </div>

        <div class="form-control">
            <input name="name" type="text" required />
            <label>Votre Prénom</label>
        </div>

        <div class="form-control">
            <input name="postName" type="text" required />
            <label>Votre nom</label>
        </div>
        <div class="form-control">
            <input name="email" type="email" required />
            <label>Votre email</label>
        </div>
        <div class="form-control">
            <input name="password" type="password" required />
            <label>Password</label>
        </div>
        <button type="submit" class="button-one">S'inscrire</button>
    </form>

    <?php

    if (isset($_POST["pseudo"]) == true & isset($_POST["name"]) == true & isset($_POST["postName"]) == true & isset($_POST["email"]) == true & isset($_POST["password"]) == true) {
        $pseudo = $_POST["pseudo"];
        $name = $_POST["name"];
        $postName = $_POST["postName"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        require "../Controleur/subscribeProcessor.php";

        //$bdd = new connectBdd($servername, $username, $password, $dbname);
        $checkRegistration = new subscribe($pseudo, $name, $postName, $email, $pass);
        $check = $checkRegistration->checkData();
        echo "<p>Vous êtes bien inscrit<p> ";
    }

    ?>
</div>

</body>

</html>