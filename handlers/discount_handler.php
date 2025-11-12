<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /new_world/home.php?error=invalid_method');
    exit;
}

$phone = trim($_POST['phone'] ?? '');

if (empty($phone)) {
    header('Location: /new_world/home.php?error=empty_phone');
    exit;
}

try {
    $stmt = $pdo->prepare("SELECT id FROM discounts WHERE phone = ?");
    $stmt->execute([$phone]);
    $discount = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($discount) {
        header('Location: /new_world/home.php?error=discount_exists');
        exit;
    }

    $stmt = $pdo->prepare("INSERT INTO discounts (phone, discount_percent) VALUES (?, 15)");
    $stmt->execute([$phone]);

    header('Location: /new_world/home.php?success=discount');
    exit;
    
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    header('Location: /new_world/home.php?error=db_error');
    exit;
}
?>