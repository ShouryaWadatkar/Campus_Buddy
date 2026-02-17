<?php
$pageTitle = 'Study Materials - Campus Buddy';
$materials = [
    ['subject' => 'Computer Science', 'title' => 'DBMS Unit 2 Notes', 'type' => 'PDF', 'author' => 'Rahul S.', 'semester' => 'Sem 4'],
    ['subject' => 'Mathematics', 'title' => 'Probability Formula Sheet', 'type' => 'DOC', 'author' => 'Asha K.', 'semester' => 'Sem 2'],
    ['subject' => 'Physics', 'title' => 'Wave Optics Summary', 'type' => 'PDF', 'author' => 'Rohit P.', 'semester' => 'Sem 3'],
    ['subject' => 'Electronics', 'title' => 'Digital Circuits Lab Manual', 'type' => 'PDF', 'author' => 'Megha J.', 'semester' => 'Sem 5'],
];
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Study Material Repository</h1>
    <p class="page-subtitle">Static preview of shared notes and academic resources.</p>
    <div class="card-grid">
        <?php foreach ($materials as $item): ?>
            <article class="card">
                <span class="badge"><?php echo htmlspecialchars($item['subject']); ?></span>
                <h3><?php echo htmlspecialchars($item['title']); ?></h3>
                <p><?php echo htmlspecialchars($item['type']); ?> | <?php echo htmlspecialchars($item['semester']); ?></p>
                <p>Uploaded by <?php echo htmlspecialchars($item['author']); ?></p>
                <button class="btn btn-secondary" type="button">Download (Static)</button>
            </article>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
