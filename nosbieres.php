<?php

$page_title = 'Flamista | Nos bi�res';
$doccss_ref = 'app/public/css/nosbieres_stylesheet.css';

ob_start();
include 'app/view/nosbieres.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';