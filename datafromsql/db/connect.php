<?php
$servername = "localhost";
$username = "root"; // thay nếu MySQL user khác
$password = ""; // mật khẩu MySQL (để trống nếu không có)
$database = "group"; // tên database của bạn

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>
