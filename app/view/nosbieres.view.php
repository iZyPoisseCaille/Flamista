<main>
    <!--BIERES-->
    <section name="Bieres" class="bieres">
        <div class="titre">
            <div class="titreEtParagraphe">
                <h1>
                    Nos bières
                </h1>
                <p>
                    Flamista incarne une marque locale passionnée par l'art de la brasserie, constamment poussée par l'innovation pour offrir des bières aux saveurs nouvelles. Fidèles à des techniques traditionnelles, nous préservons des savoir-faire locaux, brassant avec dévotion des bières qui captent l'essence même de notre héritage. Flamista rassemble une gamme diversifiée de bières, proposant une offre unique, novatrice et exaltante, pour créer une expérience de dégustation inoubliable.
                </p>
            </div>
        </div>
        <div class="grid">
            <!--BIERES-->
            <?php foreach ($bieres as $biere) : ?>
                <!--BIERE-->
                <div id="biere">
                    <img src="app/public/css/images/bieres/<?= formatNumBiere($biere['num']) ?>.png" alt="" />
                    <h2><?= $biere['nom'] ?></h2>
                    <p><?= $biere['description'] ?></p>
                    <div class="biereLink">
                        <img src="app/public/css/images/lien_fleche.png" alt="Fleche"/>
                        <a href="<?= URL ?>biere.php?num=<?= formatNumBiere($biere['num']) ?>">En savoir plus</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>
</main>