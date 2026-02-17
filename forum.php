<?php
$pageTitle = 'Discussion Forum - Campus Buddy';
$threads = [
    ['topic' => 'Best resources for Data Structures?', 'author' => 'Nikita', 'replies' => 12],
    ['topic' => 'Anyone preparing for coding interview round 1?', 'author' => 'Abhinav', 'replies' => 8],
    ['topic' => 'Need help with control systems numericals', 'author' => 'Puja', 'replies' => 5],
];
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Discussion Forum</h1>
    <p class="page-subtitle">Student-to-student Q&A and topic discussions.</p>
    <div class="list-wrap">
        <?php foreach ($threads as $thread): ?>
            <article class="list-item">
                <div>
                    <h3><?php echo htmlspecialchars($thread['topic']); ?></h3>
                    <p>Started by <?php echo htmlspecialchars($thread['author']); ?></p>
                </div>
                <strong><?php echo (int) $thread['replies']; ?> replies</strong>
            </article>
        <?php endforeach; ?>
    </div>

    <section class="panel">
        <h2>Create Thread (Static)</h2>
        <form class="form-grid" action="#" method="post">
            <input type="text" placeholder="Thread title" required>
            <textarea placeholder="Write your question"></textarea>
            <button class="btn btn-primary" type="submit">Post</button>
        </form>
    </section>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
