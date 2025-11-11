<?php 
class RequestController {
    public function showHome() {
        include __DIR__ . '/../views/partials/header.php';
        include __DIR__ . '/../views/home.php';
        include __DIR__ . '/../views/partials/footer.php';
    }
    public function showDashboard() {
        include __DIR__ . '/../views/admin/dashboard.php';
    }
}
?>