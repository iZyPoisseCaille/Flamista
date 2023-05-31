<?php
require_once 'app/config.php';

function getDatabaseConnection(): PDO
{
    $dsn = 'sqlite:C:\wamp\www\Flamista\app\database\flamista.sqlite';

    try {
        $databaseConnection = new PDO($dsn);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databaseConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }

    return $databaseConnection;
}

function getDatabaseConnectionToMySQL(): PDO
{
    $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST . ';charset=utf8';

    try {
        $databaseConnection = new PDO($dsn, DB_USER, DB_PASSWORD);
        $databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $databaseConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données : ' . $e->getMessage());
    }

    return $databaseConnection;
}