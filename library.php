<?php
$pageTitle = 'Library - Campus Buddy';
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
        <article class="list-item">
            <div>
                <h3>Introduction to Algorithms</h3>
                <p>Rack: CS-12</p>
            </div>
            <span class="pill">Available</span>
        </article>

        <article class="list-item">
            <div>
                <h3>Signals and Systems</h3>
                <p>Rack: EC-07</p>
            </div>
            <span class="pill">Issued</span>
        </article>

        <article class="list-item">
            <div>
                <h3>Engineering Mathematics</h3>
                <p>Rack: MA-03</p>
            </div>
            <span class="pill">Available</span>
        </article>

        <article class="list-item">
            <div>
                <h3>Digital Design</h3>
                <p>Rack: EC-15</p>
            </div>
            <span class="pill">Available</span>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
