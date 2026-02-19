<?php
$pageTitle = 'Discussion Forum - Campus Buddy';
require __DIR__ . '/includes/header.php';
?>
<section>
    <h1 class="page-title">Discussion Forum</h1>
    <p class="page-subtitle">Student-to-student Q&amp;A and topic discussions.</p>
    <div class="list-wrap">
        <article class="list-item">
            <div>
                <h3>Best resources for Data Structures?</h3>
                <p>Started by Nikita</p>
            </div>
            <strong>12 replies</strong>
        </article>

        <article class="list-item">
            <div>
                <h3>Anyone preparing for coding interview round 1?</h3>
                <p>Started by Abhinav</p>
            </div>
            <strong>8 replies</strong>
        </article>

        <article class="list-item">
            <div>
                <h3>Need help with control systems numericals</h3>
                <p>Started by Puja</p>
            </div>
            <strong>5 replies</strong>
        </article>
    </div>

    <section class="panel">
        <h2>Create Thread (Static)</h2>
        <form id="forumForm" class="form-grid" action="#" method="post" novalidate>
            <input type="text" name="thread_title" placeholder="Thread title">
            <textarea name="thread_body" placeholder="Write your question"></textarea>
            <button class="btn btn-primary" type="submit">Post</button>
        </form>
    </section>
</section>
<?php require __DIR__ . '/includes/footer.php'; ?>
