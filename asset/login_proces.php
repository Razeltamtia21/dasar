<?php 

session_start();
include 'config.php';

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM latihan1 WHERE username = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $user = $result->fetch_assoc();
        if(password_verify($password, $user["password"])){
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit();
        }else {
            echo "Password failed!";
        }
    }else {
        echo "Username not registered. <a href='http://localhost/latihan/latihan1/register.php'>Register</a>";
    }
}
?>
