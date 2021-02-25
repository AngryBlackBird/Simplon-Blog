<?php


if (isset($_SESSION["pseudo"])) {

    require "../../secure/log.php";
    require "../Modèle/wordOject.php";

    $insertData = new word($servername, $username, $password, $dbname);
    $date1 = "2012-04-01";
    $date2 = "2030-04-01";
    $test = $insertData->selectWordByDate($date1, $date2);



    $count = count($test);

    for ($i = 0; $i < $count; $i++) :

?>

        <div class="card">
            <div class="face face1">
                <div class="content">
                    <h3> <?php echo $i+1 ?> - <?php echo $test[$i][0]; ?></h3>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <a href="#">Lire</a>

                    <a href='#' onclick='document.getElementById("modify<?php echo $test[$i][2]; ?>").submit()'>Modifier</a>

                    <a href='#' onclick='document.getElementById("delete<?php echo $test[$i][2]; ?>").submit()'>Supprimer</a>

                    <div class="texteArea">
                        <p><?php echo $test[$i][1] ?></p>
                    </div>

                </div>
            </div>
            <form id="delete<?php echo $test[$i][2]; ?>" action="../Controleur/modifyArticleDelete.php" method="post">
                <input type="hidden" name="delete" value="<?php echo $test[$i][2]; ?>" />
            </form>
            <form id="modify<?php echo $test[$i][2]; ?>" action="modifyArticle.php" method="post">
                <input type="hidden" name="article" value="<?php echo $test[$i][1]; ?>" />
                <input type="hidden" name="title" value="<?php echo $test[$i][0]; ?>" />
                <input type="hidden" name="id" value="<?php echo $test[$i][2]; ?>" />
            </form>

        </div>


<?php
    endfor;
} else {
    session_destroy();
    header('Location: Index.php');
}
?>