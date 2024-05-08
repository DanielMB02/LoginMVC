<?php
require_once(__DIR__ . '/../config/config.php');

try {
    $connection = new PDO("mysql:host=$server;dbname=$db", $username, $password);
} 

catch (PDOException $e) {
    echo "Connection Error: " . $e->getMessage();
}
?>
 