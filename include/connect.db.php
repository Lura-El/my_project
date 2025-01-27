<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=laundry_users', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    echo "Problem connecting to database" . $e->getMessage();
    die();
}