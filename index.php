<?php
$pageTitle = 'Campus Buddy - Home';
require __DIR__ . '/includes/header.php';
?>
<section class="hero home-hero">
    <div class="hero-content">
        <h1>One campus portal for study, updates, and student collaboration</h1>
        <p>Use this static PHP prototype to preview all core modules before backend integration.</p>
        <div class="button-row">
            <a class="btn btn-primary" href="signup.php">Create Account</a>
            <a class="btn btn-secondary" href="login.php">Student Login</a>
            <a class="btn btn-secondary" href="admin-login.php">Admin Login</a>
        </div>
    </div>
</section>

<section>
    <h2 class="section-title">Core Modules</h2>
    <div class="card-grid">
        <article class="card">
            <h3>Study Material Repository</h3>
            <p>Browse notes, PDFs, and unit-wise study resources.</p>
            <a class="inline-link" href="study-materials.php">Open module</a>
        </article>

        <article class="card">
            <h3>Event Calendar</h3>
            <p>Check upcoming campus events and academic deadlines.</p>
            <a class="inline-link" href="events.php">Open module</a>
        </article>

        <article class="card">
            <h3>Lost &amp; Found Section</h3>
            <p>Post and discover lost or found items from campus.</p>
            <a class="inline-link" href="lost-found.php">Open module</a>
        </article>

        <article class="card">
            <h3>Discussion Forum</h3>
            <p>Ask questions, discuss topics, and support classmates.</p>
            <a class="inline-link" href="forum.php">Open module</a>
        </article>

        <article class="card">
            <h3>Notifications &amp; Alerts</h3>
            <p>View important announcements and urgent notices.</p>
            <a class="inline-link" href="notifications.php">Open module</a>
        </article>

        <article class="card">
            <h3>Library Integration</h3>
            <p>Track borrowed books and search library inventory.</p>
            <a class="inline-link" href="library.php">Open module</a>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
