<?php
session_start();

if (isset($_SESSION["pseudo"])) :
    include "../Vue/header-footer/header.php";

?>

    <div class="divForm">
        <form id="formArticle" action="../Controleur/insertWordProcessor.php" method="post">
            <div class="form-control">
                <input name="title" type="text" required />
                <label>Tite Chapitre</label>
            </div>

            <form id="test" action="../Controleur/insertWordProcessor.php" method="post">
                <textarea name="editor1" id="editor">
                     &lt;p&gt; &lt;/p&gt;
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
    <div class="containerCard">

        <h1>Déja publier</h1>

        <div class="container">
            <?php include "../Controleur/wordVuProcessor.php" ?>
        </div>
    </div>

    </body>

    </html>


<?php
else :
    session_destroy();
    header('Location: connect.php');

endif;
