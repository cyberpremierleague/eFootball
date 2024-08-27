<?php
session_start();
if (!isset($_SESSION['tournaments'])) {
    $_SESSION['tournaments'] = [
        ['name' => 'Champions League', 'date' => '2024-09-01'],
        ['name' => 'World Cup Qualifiers', 'date' => '2024-10-15'],
    ];
}
$tournaments = $_SESSION['tournaments'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournaments | eFootball 2024</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Tournaments</h1>
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
        <h2>Upcoming Tournaments</h2>
        <ul>
            <?php foreach ($tournaments as $tournament): ?>
                <li><?php echo htmlspecialchars($tournament['name']) . " - " . htmlspecialchars($tournament['date']); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <footer>
        <p>&copy; 2024 eFootball Tournaments. All Rights Reserved.</p>
    </footer>
</body>
</html>
