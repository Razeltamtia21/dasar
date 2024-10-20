<?php 

include 'config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["password"];

    $query = "SELECT * FROM latihan1 WHERE email = ?";
    $stmt = $connect->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 0){
        echo "email not registered. <a href='http://localhost/latihan/latihan1/register.php'>Register</a>";
    }else {
        if(strlen($password) < 8){
            echo "Password must be more than 8 characters";
            exit();
        }elseif($password !== $confirm_password){
            echo "Password and password confirmation do not match";
        }else {
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);
            $update_sql = "UPDATE latihan1 SET password = ? WHERE email = ?";
            $update_stmt = $connect->prepare($update_sql);
            $update_stmt->bind_param("ss", $hashed_password, $email);

            if($update_stmt->execute()){
                echo "Password successfully reset. <a href ='http://localhost/latihan/latihan1/login.php'>Login</a>";
            }else {
                echo "password reset failed. try again";
            }
        }
    }

    $stmt->close();
    $connect->close();
}

?>