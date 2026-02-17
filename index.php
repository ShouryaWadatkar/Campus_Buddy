<?php
$pageTitle = 'Campus Buddy - Home';
$modules = [
    ['title' => 'Study Material Repository', 'desc' => 'Browse notes, PDFs, and unit-wise study resources.', 'link' => 'study-materials.php'],
    ['title' => 'Event Calendar', 'desc' => 'Check upcoming campus events and academic deadlines.', 'link' => 'events.php'],
    ['title' => 'Lost & Found Section', 'desc' => 'Post and discover lost or found items from campus.', 'link' => 'lost-found.php'],
    ['title' => 'Discussion Forum', 'desc' => 'Ask questions, discuss topics, and support classmates.', 'link' => 'forum.php'],
    ['title' => 'Notifications & Alerts', 'desc' => 'View important announcements and urgent notices.', 'link' => 'notifications.php'],
    ['title' => 'Library Integration', 'desc' => 'Track borrowed books and search library inventory.', 'link' => 'library.php'],
];

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
        <?php foreach ($modules as $module): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($module['title']); ?></h3>
                <p><?php echo htmlspecialchars($module['desc']); ?></p>
                <a class="inline-link" href="<?php echo htmlspecialchars($module['link']); ?>">Open module</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
