<?php

require_once 'app/controller/flamista.controller.php';
require_once 'utils.php';

// Données concernant le pokemon
if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num']<=0) {
    die('Aucun numéro de pokemon transmis ou numéro incorrect');
}

generateBierePage((int) $_GET['num']);