<?php

$host = "10.0.0.11";
$db = "lab_db";
$user = "ais_user";
$pass = "1234";

echo "<h2>Test de connexion à la base de données</h2>";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    echo "<h2>Connexion réussie au serveur MariaDB ! :D </h2>";

    $query = $pdo->query("SELECT name FROM users");
    echo "<h3>Liste des utilisateurs en base :</h3><ul>";
    while ($row = $query->fetch()) {
        echo "<li>" . $row['name'] . "</li>";
    }
    echo "</ul>";
} catch (PDOException $e) {
    echo "<p> Erreur de connexion : " . $e->getMessage() . "</p>";
}