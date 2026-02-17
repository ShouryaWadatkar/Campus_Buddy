<?php
$pageTitle = 'Login - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section class="auth-wrap">
    <h1 class="page-title">Student Login</h1>
    <form class="auth-form" action="#" method="post">
        <input type="email" placeholder="College email" required>
        <input type="password" placeholder="Password" required>
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
    <p>New user? <a class="inline-link" href="signup.php">Create account</a></p>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
