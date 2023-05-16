<?php

$page_title = 'Flamista | Accueil';
$doccss_ref = 'app/public/css/accueil_stylesheet.css';

ob_start();
include 'app/view/accueil.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';