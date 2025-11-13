<?php
session_start();
require_once __DIR__ . '/config/db_connect.php';

if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}

$stmt = $pdo->query("
    SELECT r.id, r.name, r.phone, r.message, r.created_at,
            s.name AS service_name,
            d.discount_percent
        FROM requests r
        LEFT JOIN services s ON r.service_id = s.id
        LEFT JOIN discounts d ON r.discount_id = d.id
        ORDER BY r.created_at DESC
");
$requests = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Админ-панель</title>
    <link rel="stylesheet" href="public/css/admin.css">
</head>
<body>
<header>
    <h1>Заявки пользователей</h1>
    <a href="logout.php" class="logout-btn">Выйти</a>
</header>

<div class="container">
    <?php if (empty($requests)): ?>
        <p>Пока нет заявок.</p>
    <?php else: ?>
        <table>
            <thead>
            <tr>
                <th>Имя</th>
                <th>Телефон</th>
                <th>Услуга</th>
                <th>Скидка</th>
                <th>Комментарий</th>
                <th>Дата</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($requests as $r): ?>
                <tr>
                    <td><?= htmlspecialchars($r['name']) ?></td>
                    <td><?= htmlspecialchars($r['phone']) ?></td>
                    <td><?= htmlspecialchars($r['service_name'] ?? 'Не указана') ?></td>
                    <td><?= $r['discount_percent'] ? htmlspecialchars($r['discount_percent'] . '%') : 'Нет' ?></td>
                    <td><?= htmlspecialchars($r['message'] ?? '') ?></td>
                    <td><?= htmlspecialchars($r['created_at']) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>