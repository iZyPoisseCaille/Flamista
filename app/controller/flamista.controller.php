<?php

require_once 'app/model/dataConnection.php';
require_once 'app/model/flamista.model.php';

function generateBierePage(int $numBiere)
{
    $db = getDataBaseConnection();
    $biere =  getBiere($numBiere, $db);

    // Génération de la page à partir de la vue et du layout
    $page_title = "Flamista | Nos bières | " . $biere[0]['nom'];
    $doccss_ref = 'app/public/css/biere_stylesheet.css';
    $js = 'version.js';
    ob_start();
    require_once 'app/view/biere.view.php';
    $content = ob_get_clean();
    require_once 'app/view/common/layout.php';
}