<?php
session_start();

require_once 'app/model/dataConnection.php';
require_once 'app/model/commande.model.php';
require_once 'app/config.php';

try {
    if (empty($_POST['nom'])) {
        throw new Exception('Veuillez saisir un nom');
    }
    if (empty($_POST['prenom'])) {
        throw new Exception('Veuillez saisir un prénom');
    }
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception('Le format de l\'adresse e-mail est invalide.');
    }
    if (empty($_POST['ville'])) {
        throw new Exception('Veuillez saisir une ville');
    }
    if (empty($_POST['postal'])) {
        throw new Exception('Veuillez saisir un code postal');
    }
    if (strlen($_POST['postal']) > 5) {
        throw new Exception('La longueur du champ dépasse la limite maximale autorisée.');
    }
    if (empty($_POST['adresse'])) {
        throw new Exception('Veuillez saisir une adresse');
    }

    $counter = 0;
    if ($_POST['arrache'] >= 1) {
        $counter++;
    }
    if ($_POST['avine'] >= 1) {
        $counter++;
    }
    if ($_POST['emeche'] >= 1) {
        $counter++;
    }
    if ($_POST['imbibe'] >= 1) {
        $counter++;
    }
    if ($_POST['pompette'] >= 1) {
        $counter++;
    }
    if ($_POST['torche'] >= 1) {
        $counter++;
    }
    if ($counter == 0) {
        throw new Exception('Au moins une bouteille doit être commandée.');
    }

    $databaseConnection = getDatabaseConnection();
    insertNewCommande(
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        $_POST['ville'],
        $_POST['postal'],
        $_POST['adresse'],
        $_POST['arrache'],
        $_POST['avine'],
        $_POST['emeche'],
        $_POST['imbibe'],
        $_POST['pompette'],
        $_POST['torche'],
        $databaseConnection
    );

    $_SESSION['message'] = $msg;

    echo "Votre commande a bien été prise en compte, merci de votre achat !";

} catch (Exception $e) {
    $msg = "Désolé, une erreur s'est produite lors du traitement de votre commande. " . $e->getMessage();
    $_SESSION['message'] = $msg;
}

exit;