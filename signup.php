<?php
$pageTitle = 'Sign Up - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section class="auth-wrap">
    <h1 class="page-title">Sign Up</h1>
    <form class="auth-form" action="#" method="post">
        <input type="text" placeholder="Full name" required>
        <input type="email" placeholder="College email" required>
        <input type="text" placeholder="Department" required>
        <input type="password" placeholder="Create password" required>
        <button class="btn btn-primary" type="submit">Create Account</button>
    </form>
    <p>Already registered? <a class="inline-link" href="login.php">Login</a></p>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
