<?php

$page_title = 'Flamista | Commander';
$doccss_ref = 'app/public/css/commander_stylesheet.css';

ob_start();
include 'app/view/commander.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';