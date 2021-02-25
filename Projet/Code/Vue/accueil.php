<?php
session_start();


include "../Vue/header-footer/header.php"
?>

<section>
    <div class="cover">
        <div class="book">
            <label for="page-1" class="book__page book__page--1">
                <img src="../../asset/pict/Couverture.jpg" alt="">
            </label>

            <label for="page-2" class="book__page book__page--4">
                <div class="page__content">


                    <?php include "../Controleur/controleurAccueil/content.php" ?>
                    <!--
                        <div class="page__content-blockquote">
                            <p class="page__content-blockquote-text">HARI SELDON — . . . born in the 11,988th year of the Galactic Era; died 12,069. The dates are more commonly given in terms of the current Foundational Era as -79 to the year 1 F.E. Born to middle-class parents on Helicon, Arcturus sector (where his father, in a legend of doubtful authenticity, was a tobacco grower in the hydroponic plants of the planet), he early showed amazing ability in mathematics. Anecdotes concerning his ability are innumerable, and some are contradictory. At the age of two, he is said to have. . . </p>
                            <p class="page__content-blockquote-text">. . . Undoubtedly his greatest contributions were in the field of psychohistory. Seldon found the field little more than a set of vague axioms; he left it a profound statistical science. . . . </p>
                            <p class="page__content-blockquote-text">. . . The best existing authority we have for the details of his life is the biography written by Gaal Dornick who, as a young man, met Seldon two years before the great mathematician's death. The story of the meeting . . .</p>
                            <span class="page__content-blockquote-reference">Encyclopedia Galactica*</span>
                        </div>
                        <div class="page__content-text">
                            <p>His name was Gaal Dornick and he was just a country boy who had never seen Trantor before. That is, not in real life. He had seen it many times on the hyper-video, and occasionally in tremendous three-dimensional newscasts covering an Imperial Coronation or the opening of a Galactic Council. Even though he had lived all his life on the world of Synnax, which circled a star at the edges of the Blue Drift, he was not cut off from civilization, you see. At that time, no place in the Galaxy was. </p>

                            <p>There were nearly twenty-five million inhabited planets in the Galaxy then, and not one but owed allegiance to the Empire whose seat was on Trantor. It was the last half-century in which that could be said. </p>
                            <p>To Gaal, this trip was the undoubted climax of his young, scholarly life. He had been in space before so that the trip, as a voyage and nothing more, meant little to him. To be sure, he had traveled previously only as far as Synnax's only satellite in order to get the data on the mechanics of meteor driftage which he needed for his dissertation, but space-travel was all one whether one travelled half a million miles, or as many light years. </p>
                        </div> -->

                </div>
            </label>

            <!-- Resets the page -->
            <input type="radio" name="page" id="page-1" />

            <!-- Goes to the second page -->
            <input type="radio" name="page" id="page-2" />
            <label class="book__page book__page--2">
                <div class="book__page-front">
                    <div class="page__content">
                        <h1 class="page__content-book-title">Tour du monde en 40 jours</h1>
                        <h2 class="page__content-author">Bob Blog</h2>


                    </div>
                </div>
                <div class="book__page-back">
                    <div class="page__content">
                        <h1 class="page__content-title">Sommaire</h1>
                        <table class="page__content-table">
                            <?php include "../Controleur/controleurAccueil/title.php" ?>
                        </table>


                    </div>
                </div>
            </label>
        </div>
    </div>
</section>
</body>

<?php include "../Vue/header-footer/footer.php" ?>