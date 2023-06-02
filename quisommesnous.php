<?php
session_start();

require_once 'app/config.php';
require_once 'app/utils.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/flamista.model.php';

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$databaseConnection = getDatabaseConnection();

$teammatesMMI = getTeammatesMMI ($databaseConnection);
$teammatesGB = getTeammatesGB ($databaseConnection);

$page_title = 'Flamista | Qui sommes-nous ?';
$doccss_ref = 'app/public/css/quisommesnous_stylesheet.css';

ob_start();
include 'app/view/quisommesnous.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';