<?php
session_start();
require_once '../includes/db_connect.php';

if (isset($_SESSION['admin'])) {
    header('Location: admin.php');
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<h2>Вход для администратора</h2>

<form action="../actions/login_handler.php" method="post">
    <label>Логин</label>
    <input type="text" name="username" required>

    <label>Пароль</label>
    <input type="password" name="password" required>

    <button type="submit">Войти</button>
</form>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Неверный логин или пароль</p>";
}
?>

<?php include '../includes/footer.php'; ?>