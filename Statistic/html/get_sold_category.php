<?php
$host = 'localhost';
$db = 'used_car';
$user = 'root';
$pass = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT categiry_id, COUNT(*) AS categiry_count
              FROM article
              JOIN categiry ON article.categiry_id = category.category_id
              WHERE article.is_sell = '1'
              GROUP BY categiry_id";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    header('Content-Type: application/json');
    echo json_encode($result);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();

} finally {

    if ($conn) {
        $conn = null;
    }
}

