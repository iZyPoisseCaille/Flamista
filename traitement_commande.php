<?php

require_once 'app/config.php';
require_once 'app/utils.php';
require_once 'app/model/dataConnection.php';
    
$databaseConnection = getDatabaseConnectionToMySQl();

$bieres = getBieres ($databaseConnection);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];

    $ville = $_POST["city"];
    $postal = $_POST["postal"];
    $adresse = $_POST["adresse"];

    $arrache = $_POST["arrache"];
    $avine = $_POST["avine"];
    $emeche = $_POST["emeche"];
    $imbibe = $_POST["imbibe"];
    $pompette = $_POST["pompette"];
    $torche = $_POST["torche"];


    // Traitez les données comme vous le souhaitez

    // Exemple d'affichage des données de commande
    echo "Commande passée par : $nom $prenom<br>";
    echo "Email : $email <br><br>";
    
    echo "Livraison :<br>";
    echo "Ville : $ville <br>";
    echo "Code postal : $postal <br>";
    echo "Adresse : $adresse <br><br>";
    
    echo "Produits commandés : <br>";
    if ($arrache>0) {
        echo "Arraché : $arrache<br>";
    }
    if ($avine>0) {
        echo "Aviné : $avine<br>";
    }
    if ($emeche>0) {
        echo "Éméché : $emeche<br>";
    }
    if ($imbibe>0) {
        echo "Imbibé : $imbibe<br>";
    }
    if ($pompette>0) {
        echo "Pompette : $pompette<br>";
    }
    if ($torche>0) {
        echo "Torché : $torche<br>";
    }
}
?>