<?php 
class AuthController {
    public function showLogin() {
        include __DIR__ . '/../views/admin/login.php';
    }
    public function logout() {
        session_destroy();
        header("Location: index.php?page=login");
        exit;
    }
    public function checkAdmin() {
        if (empty($_SESSION['admin'])) {
            header("Location: index.php?page=login");
            exit;
        }
    }
}
?>