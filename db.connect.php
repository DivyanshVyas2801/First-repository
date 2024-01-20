<?php
// db_connect.php
$username = "root";
$password = "";
$host = 'localhost';
$dbname = 'order_detail';

// Create a PDO instance to establish the database connection
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}
?>
