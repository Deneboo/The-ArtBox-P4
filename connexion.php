<?php
require_once(__DIR__ . '/config/mysql.php');
try {
    $pdo = new PDO(
        "mysql:host=" . MYSQL_HOST . ";port=" . MYSQL_PORT . ";dbname=" . MYSQL_NAME,
        MYSQL_USER,
        MYSQL_PASSWORD
    );
} catch (PDOException $e) {
    die("error connection : " . $e->getMessage());
}