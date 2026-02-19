<?php
$pageTitle = 'Sign Up - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section class="auth-wrap">
    <h1 class="page-title">Sign Up</h1>
    <form id="signupForm" class="auth-form" action="#" method="post" novalidate>
        <input type="text" name="full_name" placeholder="Full name">
        <input type="email" name="email" placeholder="College email">
        <input type="text" name="department" placeholder="Department">
        <input type="password" name="password" placeholder="Create password">
        <button class="btn btn-primary" type="submit">Create Account</button>
    </form>
    <p>Already registered? <a class="inline-link" href="login.php">Login</a></p>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
