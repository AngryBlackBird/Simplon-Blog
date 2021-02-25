<?php
session_start();

include "header-footer/header.php";
?>


    <div class="containerFrom">

        <form action="../Controleur/connect.php" method="POST">

            <h1>Connexion</h1>
            <div class="form-control">
                <input name="pseudo" type="text" required />
                <label>Pseudo</label>
            </div>

            <div class="form-control">
                <input name="pass" type="password" required />
                <label>Password</label>
            </div>
            <button type="submit" class="button-one">Se connecter</button>
        </form>
        <?php if (isset($_SESSION["pseudo"])) :

            header('Location: Accueil.php');

        elseif (isset($_SESSION["notPseudo"])) : ?>
            <div class="indic">
                <p>Indentifiant incorect ou inexistant</p>
            </div>

        <?php
            session_destroy();

        endif ?>
        <form action="subscribe.php" method="GET">
            <h1> Pas encore inscrit ? </h1>
            <button name="subscire" type="submit" class="button-one">S'inscrire</button>
        </form>

    </div>




</body>

</html>