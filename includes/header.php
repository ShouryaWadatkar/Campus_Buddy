<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Campus Buddy';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="brand" href="index.php">Campus<span>Buddy</span></a>
        <nav class="site-nav">
            <a href="study-materials.php">Study Materials</a>
            <a href="events.php">Events</a>
            <a href="lost-found.php">Lost & Found</a>
            <a href="forum.php">Forum</a>
            <a href="notifications.php">Alerts</a>
            <a href="library.php">Library</a>
            <a href="login.php">Login</a>
        </nav>
    </div>
</header>
<main class="container page-main">
