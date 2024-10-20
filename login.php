<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="http://localhost/latihan/latihan1/asset/login_proces.php" method="post">
        <input type="text" name="username" placeholder="Your Userame" required>
        <br>
        <input type="password" name="password" placeholder="Your Password" required>
        <br>
        <a href="http://localhost/latihan/latihan1/forgot.php">Forgot Password?</a>
        <br><br>
        <button type="submit">Login</button> <a href="register.php">Register</a>
    </form>
</body>
</html>