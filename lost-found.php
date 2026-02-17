<?php
$pageTitle = 'Lost & Found - Campus Buddy';
$items = [
    ['status' => 'Lost', 'item' => 'Black Wallet', 'place' => 'Cafeteria', 'time' => 'Feb 16, 2026'],
    ['status' => 'Found', 'item' => 'Water Bottle', 'place' => 'Library 2nd Floor', 'time' => 'Feb 16, 2026'],
    ['status' => 'Lost', 'item' => 'ID Card (ECE)', 'place' => 'Parking Lot', 'time' => 'Feb 15, 2026'],
];
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Lost & Found Section</h1>
    <p class="page-subtitle">Report or claim missing items from campus (static demo).</p>
    <div class="list-wrap">
        <?php foreach ($items as $item): ?>
            <article class="list-item">
                <div>
                    <h3><?php echo htmlspecialchars($item['item']); ?></h3>
                    <p><?php echo htmlspecialchars($item['place']); ?> | <?php echo htmlspecialchars($item['time']); ?></p>
                </div>
                <span class="pill"><?php echo htmlspecialchars($item['status']); ?></span>
            </article>
        <?php endforeach; ?>
    </div>

    <section class="panel">
        <h2>Post New Item (Static)</h2>
        <form class="form-grid" action="#" method="post">
            <input type="text" placeholder="Item name" required>
            <select>
                <option>Lost</option>
                <option>Found</option>
            </select>
            <input type="text" placeholder="Location">
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </section>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
