<?php

if (isset($_SESSION["pseudo"])) :
 
    ?>
    <a href="wordAdminView.php">Gestion</a>
    <a href="../Controleur/deconnect.php">Se déconnecter</a>
<?php

else:   ?>
    <a href="connect.php">Se connecter</a>

<?php


endif;
