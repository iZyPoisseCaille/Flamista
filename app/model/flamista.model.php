<?php

require_once 'app/model/param.model.php';

function getBieres(PDO $db): array {
    $sql = "SELECT num_biere AS num, nom, description FROM biere";
    $query = $db->query($sql);
    return $query->fetchAll();
}

function getBiere(int $numBiere, PDO $db): array
{
    $sql = "SELECT * FROM biere WHERE num_biere=:numBiere";
    $params = [
        'numBiere' => [$numBiere, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}