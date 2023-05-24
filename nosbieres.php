<?php
session_start();

require_once 'config.php';
require_once 'utils.php';
require_once 'app/model/dataConnection.php';
require_once 'app/model/flamista.model.php';

if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}

$databaseConnection = getDatabaseConnection();

$bieres = getBieres ($databaseConnection);

$page_title = 'Flamista | Nos bières';
$doccss_ref = 'app/public/css/nosbieres_stylesheet.css';

ob_start();
include 'app/view/nosbieres.view.php';
$content = ob_get_clean();

include 'app/view/common/layout.php';