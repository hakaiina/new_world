<?php
session_start();
require_once '../includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM admins WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($admin && hash('sha256', $password) === $admin['password_hash']) {
        $_SESSION['admin'] = $admin['username'];
        header('Location: ../public/admin.php');
        exit;
    } else {
        header('Location: ../public/login.php?error=1');
        exit;
    }
}
?>