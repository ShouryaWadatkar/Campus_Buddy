<?php
$pageTitle = 'Login - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section class="auth-wrap">
    <h1 class="page-title">Student Login</h1>
    <form id="loginForm" class="auth-form" action="#" method="post" novalidate>
        <input type="email" name="email" placeholder="College email">
        <input type="password" name="password" placeholder="Password">
        <button class="btn btn-primary" type="submit">Login</button>
    </form>
    <p>New user? <a class="inline-link" href="signup.php">Create account</a></p>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
