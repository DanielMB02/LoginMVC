<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="../controller/UserController.php" method="post">
            <input type="hidden" name="action" value="login">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit">Login</button><br><br>
            <a href="register.php">Don't have an account? Register here</a>
        </form>
    </div>
</body>
</html>