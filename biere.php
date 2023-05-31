<?php

require_once 'app/controller/flamista.controller.php';
require_once 'app/utils.php';

// Données concernant la bière
if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num']<=0) {
    die('Aucun numéro de bière transmis ou numéro incorrect');
}

generateBierePage((int) $_GET['num']);