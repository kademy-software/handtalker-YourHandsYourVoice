<?php
session_start();
// Nếu người dùng đã đăng nhập, hủy bỏ session cũ
if(isset($_SESSION["email"])) {
    session_destroy();
}

// Kết nối đến cơ sở dữ liệu
$con = new mysqli('localhost', 'root', '', 'project');
if ($con->connect_error) {
    die("Could not connect to MySQL: " . $con->connect_error);
}

// Lấy thông tin gửi từ form
$email = $con->real_escape_string($_POST['email']); // Sử dụng real_escape_string để ngăn chặn SQL Injection
$password = $con->real_escape_string($_POST['password']); // Sử dụng real_escape_string để ngăn chặn SQL Injection
$password = md5($password);

// Thực hiện truy vấn SQL
$result = $con->query("SELECT name FROM user WHERE email = '$email' AND password = '$password'");
if (!$result) {
    die("Error: " . $con->error);
}

// Kiểm tra số lượng kết quả trả về
$count = $result->num_rows;
if ($count == 1) {
    // Lấy thông tin tên người dùng từ kết quả
    $row = $result->fetch_assoc();
    $name = $row['name'];

    // Lưu thông tin vào session và chuyển hướng đến trang account.php
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    header("location: khoa_hoc/index.php");
} else {
    // Nếu không có kết quả trả về, chuyển hướng về trang trước với thông báo lỗi
    header("location: $ref?w=Wrong Username or Password");
}

// Đóng kết nối với cơ sở dữ liệu
$con->close();
?>
