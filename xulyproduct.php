<?php
// Kết nối database
$connect = mysqli_connect('localhost', 'root', '', 'group'); // 'group' là tên database bạn đang dùng

if (!$connect) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Lấy sản phẩm từ bảng products
$query = "SELECT * FROM products";
$result = mysqli_query($connect, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<a href="categories.php?id=' . $row['id'] . '" style="text-decoration: none; color: inherit;">';
        echo '<div class="product" style="cursor: pointer;">';
        echo '<img src="images/' . $row['image'] . '" alt="Ảnh sản phẩm">';
        echo '<h3>' . $row['name'] . '</h3>';
        echo '<p>' . $row['description'] . '</p>';
        echo '</div>';
        echo '</a>';
    }
} else {
    echo '<p>Không có sản phẩm nào.</p>';
}

// Đóng kết nối
mysqli_close($connect);
?>