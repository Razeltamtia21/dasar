<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="http://localhost/latihan/latihan1/asset/register_proces.php" method="post">
        <input type="text" name="username" placeholder="Your Username" required>
        <br>
        <input type="email" name="email" placeholder="Your Email" required>
        <br>
        <input type="password" name="password" placeholder="Your Password" required>
        <br><br>
        <button type="submit">Register</button> <a href="login.php">Login</a>
    </form>
</body>
</html>