<?php
// Thông tin kết nối MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Đọc số lượt truy cập hiện tại
$sql = "SELECT view_count FROM page_views WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $current_count = (int)$row["view_count"];
} else {
    die("Không tìm thấy dữ liệu");
}

// Tăng số lượt truy cập lên 1
$current_count++;

// Cập nhật số lượt truy cập trong cơ sở dữ liệu
$sql = "UPDATE page_views SET view_count = $current_count WHERE id = 1";

if ($conn->query($sql) !== TRUE) {
    die("Lỗi: " . $conn->error);
}

// Đóng kết nối
$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Số lượt truy cập</title>
</head>
<body>
    <h1>Số lượt truy cập trang web của bạn là: <span id="visitor-count"><?php echo $current_count; ?></span></h1>
</body>
</html>
