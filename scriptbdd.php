<?php

$database_host = 'localhost';
$database_port = '3306';
$database_dbname = 'site_emploi';
$database_user = 'root';
$database_password = '';
$database_charset = 'UTF8';
$database_options = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];

$pdo = new PDO(
    'mysql:host=' . $database_host .
    ';port=' . $database_port .
    ';dbname=' . $database_dbname .
    ';charset=' . $database_charset,
    $database_user,
    $database_password,
    $database_options
);

try {

    $requete1 = "CREATE TABLE IF NOT EXISTS site_emploi.users (
        id INT NOT NULL AUTO_INCREMENT,
        username VARCHAR(255) NOT NULL,
        nom VARCHAR(255) NOT NULL,
        prenom VARCHAR(255) NOT NULL,
        age TINYINT(255) NOT NULL,
        passwd VARCHAR(255) NOT NULL,
        statut tinyint(1) NULL,
        PRIMARY KEY (id));";

    $query1 = $pdo->prepare($requete1);
    $query1->execute();

} catch (PDOException $event) {
    die('Erreur : ' . $event->getMessage());
}

