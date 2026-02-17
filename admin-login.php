<?php
$pageTitle = 'Admin Login - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section class="auth-wrap">
    <h1 class="page-title">Admin Login</h1>
    <form class="auth-form" action="admin-dashboard.php" method="get">
        <input type="text" placeholder="Admin ID" required>
        <input type="password" placeholder="Password" required>
        <button class="btn btn-primary" type="submit">Login as Admin</button>
    </form>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
