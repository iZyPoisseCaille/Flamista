<?php

$page_title = 'Flamista | Plan du site';
$doccss_ref = 'app/public/css/plansite_stylesheet.css';

ob_start();
include 'app/view/plansite.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';