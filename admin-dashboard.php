<?php
$pageTitle = 'Admin Dashboard - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Admin Dashboard</h1>
    <p class="page-subtitle">Control center for module-level content management.</p>

    <div class="card-grid">
        <article class="card">
            <p class="kicker">Total Users</p>
            <h2 class="stat-value">1,268</h2>
        </article>

        <article class="card">
            <p class="kicker">Notes Uploaded</p>
            <h2 class="stat-value">764</h2>
        </article>

        <article class="card">
            <p class="kicker">Pending Reports</p>
            <h2 class="stat-value">12</h2>
        </article>

        <article class="card">
            <p class="kicker">Active Alerts</p>
            <h2 class="stat-value">7</h2>
        </article>
    </div>

    <section class="panel">
        <h2>Admin Actions</h2>
        <ul class="action-list">
            <li>Approve or remove uploaded study materials</li>
            <li>Publish and manage notifications</li>
            <li>Moderate discussion threads and comments</li>
            <li>Review lost and found submissions</li>
            <li>Update event calendar entries</li>
        </ul>
    </section>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
