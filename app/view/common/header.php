<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="app/public/css/layout_stylesheet.css" />
        <link rel="stylesheet" type="text/css" href=<?= $doccss_ref?> />
        <style>
            @import url('https://fonts.cdnfonts.com/css/caviar-dreams');
            @import url('https://fonts.cdnfonts.com/css/muro');
            @import url('https://fonts.cdnfonts.com/css/biko');
        </style>
        <title>
            <?= $page_title ?>
        </title>
    </head>

    <body>
        <header>
            <!--NAVIGATION-->
            <nav>
                <ul>
                    <li id="logo"><a href="index.php"><img src="app/public/css/images/logo_noir.png" alt="Accueil Flamista" /></a></li>
                    <li class="headerLink"><a id="headerLink" href="quisommesnous.php">Qui sommes-nous ?</a></li>
                    <li class="headerLink"><a id="headerLink" href="notreproduction.php">Notre production</a></li>
                    <li class="headerLink"><a id="headerLink" href="nosbieres.php">Nos bières</a></li>
                </ul>
            </nav>
            <!--FIl D'ARIANE'-->
            <section name="Fil d'Ariane">
                <div class="filAriane">
                    <h4>Vous êtes ici : </h4>
                    <a href="#"><?= $page_title ?></a>
                </div>
            </section>
        </header>