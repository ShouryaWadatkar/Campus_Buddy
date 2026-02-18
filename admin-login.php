<?php
$pageTitle = 'Admin Login - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section class="auth-wrap">
    <h1 class="page-title">Admin Login</h1>
    <form id="adminLoginForm" class="auth-form" action="admin-dashboard.php" method="get" novalidate>
        <input type="text" name="admin_id" placeholder="Admin ID">
        <input type="password" name="password" placeholder="Password">
        <button class="btn btn-primary" type="submit">Login as Admin</button>
    </form>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
