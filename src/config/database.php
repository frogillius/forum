<?php
$host = 'localhost'; // MySQL server host
$dbname = 'forum_db'; // Database name
$username = 'root'; // Database username
$password = '2088'; // Database password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>