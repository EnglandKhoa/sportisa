<?php
$host = 'dbsportisa.mysql.database.azure.com';
$dbname = 'sportisa';
$username = 'sportisa';
$password = 'password123!';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("SET NAMES 'utf8'");
} catch(PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
    die();
}
?>
