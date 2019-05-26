<?php
$serveur = 'localhost';
$login = 'sql';
$mot_de_passe = 'kq6h84_I';
$base_de_donnees = 'antoinethys_';
$charset = 'UTF8';
$port = 3306;

try {
    $pdo = new PDO('mysql:host=' . $serveur . ';dbname=' . $base_de_donnees . ';charset=' . $charset . ';port=' . $port, $login, $mot_de_passe);
} catch (PDOException $error) {
    echo $error->getCode() . ' ' . $error->getMessage();
}
