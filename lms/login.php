<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if (isset($_SESSION["email"])) {
    session_destroy();
    session_start(); // Khởi tạo lại session sau khi hủy
}

include_once 'dbConnection.php';

$email = $_POST['email'];
$password = $_POST['password'];

// Sử dụng hàm mysqli_real_escape_string để tránh SQL Injection
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$password = md5($password); 

// Kiểm tra kết quả truy vấn cơ sở dữ liệu
$result = mysqli_query($con, "SELECT name FROM user WHERE email = '$email' and password = '$password'");
if (!$result) {
    die('Query Failed: ' . mysqli_error($con));
}

$count = mysqli_num_rows($result);
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
    }
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    header("location:index.php");
    exit();
} else {
    header("Location: errorPage.php?message=Wrong+Username+or+Password");
    exit();
}
?>
