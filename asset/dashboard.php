<?php
session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Wellcome <?php echo htmlspecialchars($username); ?></h2>
    <br><br>
    <a href="http://localhost/latihan/latihan1/asset/logout.php">logout</a>
</body>
</html>