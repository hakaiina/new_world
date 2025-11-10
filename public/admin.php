<?php 
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>

<?php include '../includes/header.php'; ?>

<h2>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['admin']); ?></h2>

<p>Здесь будет панель администратора</p>
<a href="logout.php">Выйти</a>

<?php include '../includes/footer.php'; ?>