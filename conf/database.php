<?php

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'nueva_tienda';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    die('Connection Failed: ' . $e->getMessage());
}
