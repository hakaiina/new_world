<?php 
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/config/db_connect.php';
require_once __DIR__ . '/config/paths.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        require_once __DIR__ . '/controllers/RequestController.php';
        $controller = new RequestController();
        $controller->showHome();
        break;

    case 'login':
        require_once __DIR__ . '/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->showLogin();
        break;

    case 'admin':
        require_once __DIR__ . '/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->checkAdmin();
        require_once __DIR__ . '/controllers/RequestController.php';
        $req = new RequestController();
        $req->showDashboard();
        break;

    case 'logout':
        require_once __DIR__ . '/controllers/AuthController.php';
        $controller = new AuthController();
        $controller->logout();
        break;

    default:
        include __DIR__ . '/views/partials/header.php';
        echo "<h1>404 - страница не найдена</h1>";
        include __DIR__ . '/views/partials/footer.php';
        break;
}
?>