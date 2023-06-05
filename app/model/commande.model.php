<?php

function insertNewCommande(string $nom, string $prenom, string $email, string $ville, string $postal, string $adresse, int $arrache, int $avine, int $emeche, int $imbibe, int $pompette, int $torche, PDO $databaseConnection): bool
{
    try {
        $sql = "INSERT INTO commandes (nom, prenom, email, ville, code_postal, adresse, arrache, avine, emeche, imbibe, pompette, torche)
        VALUES (:nom, :prenom, :email, :ville, :postal, :adresse, :arrache, :avine, :emeche, :imbibe, :pompette, :torche)";
        $stmt = $databaseConnection->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':ville', $ville);
        $stmt->bindParam(':postal', $postal);
        $stmt->bindParam(':adresse', $adresse);
        $stmt->bindParam(':arrache', $arrache);
        $stmt->bindParam(':avine', $avine);
        $stmt->bindParam(':emeche', $emeche);
        $stmt->bindParam(':imbibe', $imbibe);
        $stmt->bindParam(':pompette', $pompette);
        $stmt->bindParam(':torche', $torche);
        return $stmt->execute();
    } catch (PDOException $e) {
        throw $e;
    }
}
