<?php 

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/latihan/latihan1/login.php");
exit();

?>