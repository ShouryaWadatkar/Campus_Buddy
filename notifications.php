<?php
$pageTitle = 'Notifications - Campus Buddy';
$alerts = [
    ['type' => 'Urgent', 'msg' => 'Tomorrow classes start at 9:30 AM due to maintenance.'],
    ['type' => 'Academic', 'msg' => 'Mid-sem timetable released on ERP portal.'],
    ['type' => 'Event', 'msg' => 'Registration for Hack Night closes on March 2.'],
    ['type' => 'Library', 'msg' => 'Book return deadline reminder for issue batch A14.'],
];
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Notifications & Alerts</h1>
    <p class="page-subtitle">All announcement types in one feed.</p>
    <div class="card-grid">
        <?php foreach ($alerts as $alert): ?>
            <article class="card">
                <span class="badge"><?php echo htmlspecialchars($alert['type']); ?></span>
                <p><?php echo htmlspecialchars($alert['msg']); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
