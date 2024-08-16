<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

header {
    background-color: #4685e7;
    color: #fff;
    padding: 10px 0;
}

header .container {
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
}

header h1 {
    margin: 0;
}

.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
}

main {
    width: 100%;
    max-width: 400px;
    padding: 20px;
}

section {
    margin-bottom: 40px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 10px;
    font-weight: bold;
}

input[type="text"], input[type="password"] {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    margin-top: 5px;
}

.buttons {
    margin-top: 20px;
}

button {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    color: #fff;
    background-color: #333;
    cursor: pointer;
    margin-right: 10px;
}

button:hover {
    background-color: #555;
}

button[type="button"] {
    background-color: #ccc;
}

button[type="button"]:hover {
    background-color: #999;
}

#form-message {
    margin-top: 10px;
    font-weight: bold;
}

    </style>
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <header>
        <div class="container">
            <h1>Event Management System</h1>
        </div>
    </header>
    <div class="container">
        <main>
            <section id="login">
                <h2>Login</h2>
                <form id="login-form" action="/login" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>

                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required minlength="6">

                    <div class="buttons">
                        <button type="submit">Login</button>
                        <button type="button" onclick="window.location.href='/'">Cancel</button>
                    </div>
                </form>
                <div id="form-message"></div>
            </section>
        </main>
    </div>
    <!-- <footer>
        <p>&copy; 2024 Event Organization. All rights reserved.</p>
    </footer> -->

    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const messageDiv = document.getElementById('form-message');

            if (username.trim() === '' || password.trim() === '') {
                messageDiv.textContent = 'Please fill in both fields.';
                messageDiv.style.color = 'red';
                event.preventDefault();
            } else if (password.length < 6) {
                messageDiv.textContent = 'Password must be at least 6 characters long.';
                messageDiv.style.color = 'red';
                event.preventDefault();
            } else {
                messageDiv.textContent = '';
            }
        });
    </script>
</body>
</html>
