<?php
$pageTitle = 'Library - Campus Buddy';
$books = [
    ['title' => 'Introduction to Algorithms', 'status' => 'Available', 'rack' => 'CS-12'],
    ['title' => 'Signals and Systems', 'status' => 'Issued', 'rack' => 'EC-07'],
    ['title' => 'Engineering Mathematics', 'status' => 'Available', 'rack' => 'MA-03'],
    ['title' => 'Digital Design', 'status' => 'Available', 'rack' => 'EC-15'],
];
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Library Integration</h1>
    <p class="page-subtitle">Static mockup for library search and issue tracking.</p>

    <section class="panel">
        <form id="librarySearchForm" class="form-grid" action="#" method="get" novalidate>
            <input type="text" name="query" placeholder="Search by title or author">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </section>

    <div class="list-wrap">
        <?php foreach ($books as $book): ?>
            <article class="list-item">
                <div>
                    <h3><?php echo htmlspecialchars($book['title']); ?></h3>
                    <p>Rack: <?php echo htmlspecialchars($book['rack']); ?></p>
                </div>
                <span class="pill"><?php echo htmlspecialchars($book['status']); ?></span>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
