<?php
$pageTitle = 'Lost & Found - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Lost &amp; Found Section</h1>
    <p class="page-subtitle">Report or claim missing items from campus (static demo).</p>
    <div class="list-wrap">
        <article class="list-item">
            <div>
                <h3>Black Wallet</h3>
                <p>Cafeteria | Feb 16, 2026</p>
            </div>
            <span class="pill">Lost</span>
        </article>

        <article class="list-item">
            <div>
                <h3>Water Bottle</h3>
                <p>Library 2nd Floor | Feb 16, 2026</p>
            </div>
            <span class="pill">Found</span>
        </article>

        <article class="list-item">
            <div>
                <h3>ID Card (ECE)</h3>
                <p>Parking Lot | Feb 15, 2026</p>
            </div>
            <span class="pill">Lost</span>
        </article>
    </div>

    <section class="panel">
        <h2>Post New Item (Static)</h2>
        <form id="lostFoundForm" class="form-grid" action="#" method="post" novalidate>
            <input type="text" name="item_name" placeholder="Item name">
            <select name="status">
                <option value="">Select status</option>
                <option value="Lost">Lost</option>
                <option value="Found">Found</option>
            </select>
            <input type="text" name="location" placeholder="Location">
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </section>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
