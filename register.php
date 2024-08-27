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
                event.preventDefault();
                let username = document.getElementById('username').value;
                let email = document.getElementById('email').value;
                let password = document.getElementById('password').value;

                if (username === "" || email === "" || password === "") {
                    alert("All fields are required!");
                } else {
                    let users = JSON.parse(localStorage.getItem('users')) || [];
                    users.push({username, email, password});
                    localStorage.setItem('users', JSON.stringify(users));
                    alert("Registration successful!");
                    event.target.reset();
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
                <li><a href="index.html">Home</a></li>
                <li><a href="tournaments.html">Tournaments</a></li>
                <li><a href="leaderboard.html">Leaderboard</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <form>
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
