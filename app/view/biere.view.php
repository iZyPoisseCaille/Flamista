<main>
    <section name="biere">
        <div class="biere">
            <div class="biereImg">
                <img src="app/public/css/images/bieres/<?= $_GET['num'] ?>.png" alt="Image de la bière nommée <?= $biere[0]['nom'] ?>." />
            </div>
            <div id="description">
                <div class="biereNom">
                    <h1>
                        <?= $biere[0]['nom'] ?>
                    </h1>
                </div>
                <div class="biereDescription">
                    <p>
                        <?= $biere[0]['description'] ?>
                    </p>
                </div>
                <div class="biereComposition">
                    <h2>
                        Composition :
                    </h2>
                    <ul>
                        <?php for ($i = 1; $i <= 5; $i++) : ?>
                            <li>
                                <?= $biere[0]['composition_' . $i] ?>
                            </li>
                        <?php endfor ?>
                    </ul>
                </div>
                <section name="acheter">
                    <div class="acheter">
                        <a href="commander.php"><img src="app/public/css/images/cart.png" alt="Icone de caddie." />Commander</a>
                    </div>
                </section>
            </div>
        </div>
    </section>
</main>