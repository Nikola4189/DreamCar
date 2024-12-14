<?php
$host = 'localhost';
$db = 'used_car';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT DATE_FORMAT(created_at, '%Y-%m') AS month, AVG(price) AS average_price
              FROM article
              WHERE is_sell = '1'
              GROUP BY month
              ORDER BY month";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($result);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if ($conn) {
    $conn = null;
}
