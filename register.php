<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['users'][] = [
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
    ];
    echo "<p>Registration successful!</p>";
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | eFootball 2024</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('form').addEventListener('submit', function(event) {
                let username = document.getElementById('username').value;
                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;

                if (username === "" || email === "" || password === "") {
                    alert("All fields are required!");
                    event.preventDefault();
                }
            });
        });
    </script>
</head>
<body>
    <header>
        <h1>Register</h1>
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
        <form action="register.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 eFootball Tournaments. All Rights Reserved.</p>
    </footer>
</body>
</html>
