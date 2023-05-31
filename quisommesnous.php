<?php

$page_title = 'Flamista | Qui sommes nous ?';
$doccss_ref = 'app/public/css/quisommesnous_stylesheet.css';

ob_start();
include 'app/view/quisommesnous.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';