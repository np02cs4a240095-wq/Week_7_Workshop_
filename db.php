<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "herald_db";

try {
    $pdo = new PDO(
        "mysql:host=$server;dbname=$database;charset=utf8mb4",
        $username,
        $password
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
