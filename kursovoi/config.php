<?php
    $host = 'localhost';
    $dbname = 'kr_zaxarov';
    $username = 'root';
    $password = '';
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $pe) {
    die("Could not connect to the database $dbname :" . $pe->getMessage());
}