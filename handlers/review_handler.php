<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../config/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /new_world/home.php?error=invalid_method&form=review');
    exit;
}

$name = trim($_POST['name'] ?? '');
$review_text = trim($_POST['text'] ?? ''); 
$rating = intval($_POST['rating'] ?? 0); 

if (empty($name) || empty($review_text) || $rating === 0) {
    header('Location: /new_world/home.php?error=empty_fields&form=review');
    exit;
}

if ($rating < 1 || $rating > 5) {
    header('Location: /new_world/home.php?error=invalid_rating&form=review');
    exit;
}

if (strlen($name) > 100) {
    header('Location: /new_world/home.php?error=name_too_long&form=review');
    exit;
}

if (strlen($review_text) > 1000) {
    header('Location: /new_world/home.php?error=text_too_long&form=review');
    exit;
}

try {
    $stmt = $pdo->prepare("
        INSERT INTO reviews (name, rating, review_text, created_at) 
        VALUES (?, ?, ?, NOW())
    ");
    
    $stmt->execute([$name, $rating, $review_text]);

    header('Location: /new_world/home.php?success=review');
    exit;
    
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    header('Location: /new_world/home.php?error=db_error&form=review');
    exit;
}
?>