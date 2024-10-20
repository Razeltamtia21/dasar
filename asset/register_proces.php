<?php 

include 'config.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(strlen($password) < 8){
        echo "Password must be more than 8 characters";
        exit();
    }

    $query = "SELECT * FROM latihan1 WHERE username = ? OR email = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        echo "Username or email is already registered. <a href='http://localhost/latihan/latihan1/login.php'>Login</a>";
    }else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash password
        $insertQuery = "INSERT INTO latihan1 (username, email, password) VALUES (?, ?, ?)";
        $insertStmt = $connect->prepare($insertQuery);
        $insertStmt->bind_param("sss", $username, $email, $hashedPassword);
        $insertStmt->execute();

        echo "Account created successfully! <a href='http://localhost/latihan/latihan1/login.php'>Login</a>";
    }
}
?>
