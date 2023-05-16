<main>
    <!--CAROUSSEL-->
    <section name="carrousel"  class="carrouselImgs">
        <div class="carrouselElements">
            <h1 class="carrouselTitre">
                <?= utf8_encode('Découvrez nos bières dans notre brasserie.')?>
            </h1>
            <div class="carrouselDecouvrirPlus">
                <img class="carrouselFleche" src="app/public/css/images/lien_fleche.png" alt="" />
                <a class="carrouselLien" href=""><?= utf8_encode('Découvrir plus')?></a>
            </div>
        </div>
        <div class="carrouselBoutons">
            <button class="carrouselBouton">
                              
            </button>         
            <button class="carrouselBouton">
                              
            </button>         
            <button class="carrouselBouton">

            </button>
        </div>
    </section>

    <!--PUBLICITE-->
    <section name="video">
        <h1 class="titres">
            <?= utf8_encode('Notre dernière publicité')?>
        </h1>
        <div class="pub">
            <video controls width="1280">
                <source src="app/public/css/images/publicite2023.mp4" alt="Publicité 2023"></source>
            </video>
        </div>
    </section>

    <!--ENGAGEMENTS-->
    <section name="video">
        <h1 class="titres">
            Nos engagements
        </h1>
        <div id="engagements">
            <div class="engagementsTexte">
                <div class="engagementsTitre">
                    <h3>
                        <?= utf8_encode("Flamista s'est engagé en 2023 dans plusieurs causes telles que l'écologie et la précarité étudiante.")?>
                    </h3>
                    <h3>
                        <?= utf8_encode("Pour cela nous entreprenons diverses actions au sein de l'entreprise.")?>
                    </h3>
                </div>
                <p>
                    <?= utf8_encode("Nous nous engageons à produire des bières de qualité tout en restant avec une empreinte carbone à 0%.")?>
                </p>
                <p>
                    <?= utf8_encode("Limiter notre consommation d'eau. Pour créer une bière de qualité, il faut de l'eau : mais ce n'est pas pour autant qu'on ne doit pois l'utiliser modérément.")?>
                </p>
                <p>
                    <?= utf8_encode("Les prix de nos produits sont à un prix extrêmement affordable pour n'importe quel étudiant.")?>
                </p>
            </div>
            <div class="engagementsImage">
                <img src="app/public/css/images/engagements_icon.png" alt="Image d'illustration de nos engagements" />
            </div>
        </div>
    </section>
</main>