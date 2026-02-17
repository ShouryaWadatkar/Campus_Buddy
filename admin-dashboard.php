<?php
$pageTitle = 'Admin Dashboard - Campus Buddy';
$stats = [
    ['label' => 'Total Users', 'value' => '1,268'],
    ['label' => 'Notes Uploaded', 'value' => '764'],
    ['label' => 'Pending Reports', 'value' => '12'],
    ['label' => 'Active Alerts', 'value' => '7'],
];
$actions = [
    'Approve or remove uploaded study materials',
    'Publish and manage notifications',
    'Moderate discussion threads and comments',
    'Review lost and found submissions',
    'Update event calendar entries',
];
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Admin Dashboard</h1>
    <p class="page-subtitle">Control center for module-level content management.</p>

    <div class="card-grid">
        <?php foreach ($stats as $stat): ?>
            <article class="card">
                <p class="kicker"><?php echo htmlspecialchars($stat['label']); ?></p>
                <h2 class="stat-value"><?php echo htmlspecialchars($stat['value']); ?></h2>
            </article>
        <?php endforeach; ?>
    </div>

    <section class="panel">
        <h2>Admin Actions</h2>
        <ul class="action-list">
            <?php foreach ($actions as $action): ?>
                <li><?php echo htmlspecialchars($action); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
