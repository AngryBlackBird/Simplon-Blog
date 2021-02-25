<?php
session_start();
include "header-footer/header.php";

if (isset($_POST['article']) & isset($_POST['title']) & isset($_POST['id']) & isset($_SESSION['pseudo'])) :


?>

    <div class="divForm">
        <form id="formArticle" action="../Controleur/modifyArticleProcessor.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_POST["id"] ?>" />
            <input type="hidden" name="modify" value="modify" />
            <div class="form-control">
                <input name="title" type="text" value="<?php echo $_POST["title"]; ?>" required />
                <label>Tite Chapitre</label>
            </div>

            <form action="../Controleur/modifyArticleProcessor.php" method="post">
                <textarea name="article" id="editor">
            &lt;p&gt;<?php echo $_POST['article'] ?>&lt;/p&gt;
        </textarea>
                <p> <button type="submit" class="button-one">Envoyer</button></p>
            </form>
            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'))
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        </form>
    </div>

<?php
else :
    header('Location: ../../Index.php');
endif;
?>