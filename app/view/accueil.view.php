<main>
    <!--CARROUSEL-->
    <section name="carrousel" id="carrouselImgs">
        <div class="carrouselElements">
            <h1 class="carrouselTitre">
                Découvrez nos bières dans notre brasserie.
            </h1>
            <div class="carrouselDecouvrirPlus">
                <img class="carrouselFleche" src="app/public/css/images/lien_fleche.png" alt="" />
                <a class="carrouselLien" href="nosbieres.php">Découvrir plus</a>
            </div>
        </div>
        <div class="carrouselBoutons">
            <button onclick="ChangeImage(1)" class="carrouselBouton"></button>
            <button onclick="ChangeImage(4)" class="carrouselBouton"></button> <!-- Pour une raison que j'ignore, si je met 2 ça n'affiche que l'image de test et non pas l'image qui est sensée s'afficher -->
            <button onclick="ChangeImage(3)" class="carrouselBouton"></button>
        </div>
        <script>
            var x = document.getElementById("carrouselImgs");
            var boutons = document.getElementsByClassName("carrouselBouton");
            var link = 'app/public/css/images/carrousel/';

            boutons[0].style.backgroundColor = 'white';
            boutons[0].style.border = 'solid gray';

            function ChangeImage(num) {
                var imageLink = link + num + ".png";
                x.style.backgroundImage = "url('" + imageLink + "')";

                for (var i = 0; i < boutons.length; i++) {
                    boutons[i].style.backgroundColor = 'transparent';
                    boutons[i].style.border = 'solid white';
                }

                if(num == 4) {
                    boutons[1].style.backgroundColor = 'white';
                    boutons[1].style.border = 'solid gray';
                }
                else
                    boutons[num - 1].style.backgroundColor = 'white';
                    boutons[num - 1].style.border = 'solid gray';
            }
        </script>

    </section>



    <!--PUBLICITE-->
    <section name="video">
        <h1 class="titres">
            Notre dernière publicité
        </h1>
        <div class="pub">
            <video controls width="1280">
                <source src="app/public/css/images/publicite2023.mp4" alt="Publicité 2023">
                </source>
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
                        Flamista s'est engagé en 2023 dans plusieurs causes telles que l'écologie et la précarité étudiante.
                    </h3>
                    <h3>
                        Pour cela nous entreprenons diverses actions au sein de l'entreprise.
                    </h3>
                </div>
                <p>
                    Nous nous engageons à produire des bières de qualité tout en restant avec une empreinte carbone à 0%.
                </p>
                <p>
                    Limiter notre consommation d'eau. Pour créer une bière de qualité, il faut de l'eau : mais ce n'est pas pour autant qu'on ne doit pois l'utiliser modérément.
                </p>
                <p>
                    Les prix de nos produits sont à un prix extrêmement affordable pour n'importe quel étudiant.
                </p>
            </div>
            <div class="engagementsImage">
                <img src="app/public/css/images/engagements_icon.png" alt="Image d'illustration de nos engagements" />
            </div>
        </div>
    </section>
</main>