<main>
    <section class="presentationEquipeMMI">
        <h1 class="titre">
            Equipe
        </h1>
        <h2 class="soustitre">
            Métiers du Multimédia et de l'Internet
        </h2>
        <div class="equipe">
            <?php foreach ($teammatesMMI as $teammateMMI) : ?>
                <div id="carte">
                    <div class="carteImg">
                        <img src="app/public/css/images/teammatesMMI/00<?= $teammateMMI['num'] ?>" alt="Photo de <?= $teammateMMI['nom'] ?>." />
                    </div>
                    <div class="carteNom">
                        <h1>
                            <?= $teammateMMI['nom'] ?>
                        </h1>
                    </div>
                    <div class="carteRole">
                        <h2>
                            <?= $teammateMMI['role'] ?>
                        </h2>
                    </div>
                    <div class="teammateLink">
                        <img src="app/public/css/images/lien_fleche.png" alt="Illustration de flêche" />
                        <a href="<?= URL ?>teammateMMI.php?num=<?= formatNumBiere($teammateMMI['num']) ?>">En savoir plus</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
    <section class="presentationEquipeGB">
        <h1 class="titre">
            Equipe
        </h1>
        <h2 class="soustitre">
            Génies Biologiques
        </h2>
        <div class="equipe">
            <?php foreach ($teammatesGB as $teammateGB) : ?>
                <div id="carte">
                    <div class="carteImg">
                        <img src="app/public/css/images/teammatesGB/00<?= $teammateGB['num'] ?>" alt="Photo de <?= $teammateGB['nom'] ?>." />
                    </div>
                    <div class="carteNom">
                        <h1>
                            <?= $teammateGB['nom'] ?>
                        </h1>
                    </div>
                    <div class="carteRole">
                        <h2>
                            <?= $teammateGB['role'] ?>
                        </h2>
                    </div>
                    <div class="teammateLink">
                        <img src="app/public/css/images/lien_fleche.png" alt="Illustration de flêche" />
                        <a href="<?= URL ?>teammateGB.php?num=<?= formatNumBiere($teammateGB['num']) ?>">En savoir plus</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>