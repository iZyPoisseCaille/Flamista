<main>
    <section name="teammate">
        <div class="teammate">
            <div class="teammateImg">
                <?php if ($teammate[0]['nom'] == "Antonin" || $teammate[0]['nom'] == "Lana" || $teammate[0]['nom'] == "Léonie") : ?>
                <img src="app/public/css/images/teammatesGB/<?= $_GET['num'] ?>.png" alt="Image de <?= $teammate[0]['nom'] ?>." />
                <?php else : ?>
                <img src="app/public/css/images/teammatesMMI/<?= $_GET['num'] ?>.png" alt="Image de <?= $teammate[0]['nom'] ?>." />
                <?php endif; ?>
            </div>
            <div id="description">
                <div class="teammateNom">
                    <h1>
                        <?= $teammate[0]['nom'] ?>
                    </h1>
                </div>
                <div class="teammateRole">
                    <h2>
                        <?= $teammate[0]['role'] ?>
                    </h2>
                </div>
                <div class="teammateDescription">
                    <p>
                        <?= $teammate[0]['description'] ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>