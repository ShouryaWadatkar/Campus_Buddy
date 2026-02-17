<?php
$pageTitle = 'Events - Campus Buddy';
$events = [
    ['date' => 'Mar 04, 2026', 'name' => 'Tech Club Hack Night', 'location' => 'Block B Lab 3'],
    ['date' => 'Mar 08, 2026', 'name' => 'Placement Aptitude Workshop', 'location' => 'Seminar Hall'],
    ['date' => 'Mar 15, 2026', 'name' => 'Cultural Fest Auditions', 'location' => 'Open Amphitheatre'],
    ['date' => 'Mar 22, 2026', 'name' => 'Mid-Sem Exam Orientation', 'location' => 'Main Auditorium'],
];
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Event Calendar</h1>
    <p class="page-subtitle">Track college activities, workshops, and important academic dates.</p>
    <div class="list-wrap">
        <?php foreach ($events as $event): ?>
            <article class="list-item">
                <div>
                    <h3><?php echo htmlspecialchars($event['name']); ?></h3>
                    <p><?php echo htmlspecialchars($event['location']); ?></p>
                </div>
                <strong><?php echo htmlspecialchars($event['date']); ?></strong>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
