<!DOCTYPE html>
<html lang="en">
<head>
    <title>User registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css"> 
</head>
<body>
    <div class="container">
        <h2>User registration</h2>
        <form action="../controller/UserController.php" method="post">
            <input type="hidden" name="action" value="register">
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required><br><br>
            <button type="submit">Register</button><br><br>
            <a href="login.php">Already have an account? Log in here</a>
        </form>
    </div>
</body>
</html>