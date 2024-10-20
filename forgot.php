<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <form action="http://localhost/latihan/latihan1/asset/reset_password.php" method="post">
        <input type="email" name="email" placeholder="Your Email" required>
        <br>
        <input type="password" name="password" placeholder="Your Password New" required>
        <br>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <br><br>
        <button trpe="submit">Reset</button>
    </form>
</body>
</html>