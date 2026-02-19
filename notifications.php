<?php
$pageTitle = 'Notifications - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Notifications &amp; Alerts</h1>
    <p class="page-subtitle">All announcement types in one feed.</p>
    <div class="card-grid">
        <article class="card">
            <span class="badge">Urgent</span>
            <p>Tomorrow classes start at 9:30 AM due to maintenance.</p>
        </article>

        <article class="card">
            <span class="badge">Academic</span>
            <p>Mid-sem timetable released on ERP portal.</p>
        </article>

        <article class="card">
            <span class="badge">Event</span>
            <p>Registration for Hack Night closes on March 2.</p>
        </article>

        <article class="card">
            <span class="badge">Library</span>
            <p>Book return deadline reminder for issue batch A14.</p>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
