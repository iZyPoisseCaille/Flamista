<?php

require_once 'app/controller/flamista.controller.php';
require_once 'app/utils.php';

// Données concernant le teammate
if (empty($_GET['num']) || !ctype_digit($_GET['num']) || $_GET['num'] <= 0) {
    die("Aucun numéro de membre d'équipe transmis ou numéro incorrect");
}

generateTeammateMMIPage((int) $_GET['num']);
