<?php
$pageTitle = 'Study Materials - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Study Material Repository</h1>
    <p class="page-subtitle">Static preview of shared notes and academic resources.</p>
    <div class="card-grid">
        <article class="card">
            <span class="badge">Computer Science</span>
            <h3>DBMS Unit 2 Notes</h3>
            <p>PDF | Sem 4</p>
            <p>Uploaded by Rahul S.</p>
            <button class="btn btn-secondary" type="button">Download (Static)</button>
        </article>

        <article class="card">
            <span class="badge">Mathematics</span>
            <h3>Probability Formula Sheet</h3>
            <p>DOC | Sem 2</p>
            <p>Uploaded by Asha K.</p>
            <button class="btn btn-secondary" type="button">Download (Static)</button>
        </article>

        <article class="card">
            <span class="badge">Physics</span>
            <h3>Wave Optics Summary</h3>
            <p>PDF | Sem 3</p>
            <p>Uploaded by Rohit P.</p>
            <button class="btn btn-secondary" type="button">Download (Static)</button>
        </article>

        <article class="card">
            <span class="badge">Electronics</span>
            <h3>Digital Circuits Lab Manual</h3>
            <p>PDF | Sem 5</p>
            <p>Uploaded by Megha J.</p>
            <button class="btn btn-secondary" type="button">Download (Static)</button>
        </article>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
