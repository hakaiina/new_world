<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /new_world/home.php?error=invalid_method');
    exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$service_id = trim($_POST['service_id'] ?? '');
$message = trim($_POST['message'] ?? '');

if (empty($name) || empty($phone) || empty($service_id)) {
    header('Location: /new_world/home.php?error=empty_fields&form=request');
    exit;
}

try {
    $discount_id = null;
    $stmt = $pdo->prepare("SELECT id FROM discounts WHERE phone = ?");
    $stmt->execute([$phone]);
    $discount = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($discount) {
        $discount_id = $discount['id'];
    }

    $stmt = $pdo->prepare("
        INSERT INTO requests (name, phone, service_id, message, discount_id) 
        VALUES (?, ?, ?, ?, ?)
    ");
    
    $stmt->execute([$name, $phone, $service_id, $message, $discount_id]);

    header('Location: /new_world/home.php?success=request');
    exit;
    
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    header('Location: /new_world/home.php?error=db_error');
    exit;
}
?>