<?php
session_start();
$users = isset($_SESSION['users']) ? $_SESSION['users'] : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard | eFootball 2024</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Leaderboard</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="tournaments.php">Tournaments</a></li>
                <li><a href="leaderboard.php">Leaderboard</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Top Registered Users</h2>
        <ol>
            <?php foreach ($users as $user): ?>
                <li><?php echo htmlspecialchars($user['username']); ?></li>
            <?php endforeach; ?>
        </ol>
    </section>

    <footer>
        <p>&copy; 2024 eFootball Tournaments. All Rights Reserved.</p>
    </footer>
</body>
</html>
