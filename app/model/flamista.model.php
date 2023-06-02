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

function getTeammatesMMI(PDO $db): array {
    $sql = "SELECT id_teammate AS num, nom, role, description FROM teammateMMI";
    $query = $db->query($sql);
    return $query->fetchAll();
}

function getTeammateMMI(int $numTeammate, PDO $db): array
{
    $sql = "SELECT * FROM teammateMMI WHERE id_teammate=:numTeammate";
    $params = [
        'numTeammate' => [$numTeammate, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}

function getTeammatesGB(PDO $db): array {
    $sql = "SELECT id_teammate AS num, nom, role, description FROM teammateGB";
    $query = $db->query($sql);
    return $query->fetchAll();
}

function getTeammateGB(int $numTeammate, PDO $db): array
{
    $sql = "SELECT * FROM teammateGB WHERE id_teammate=:numTeammate";
    $params = [
        'numTeammate' => [$numTeammate, PDO::PARAM_INT],
    ];
    return launchSimpleRequest($sql, $params, $db);
}