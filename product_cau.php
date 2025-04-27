<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8"> <!--hỗ trợ tiếng việt-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP DUNG CU CAU LONG SPORTS</title>
    <link rel="stylesheet" href="trangcon.css">
</head>

<body>
    <header>
        <img src="images/logo.avif" alt="Logo" class="logo">
        <i class="fas fa-store" style="font-size: 5rem; color: rgb(16, 16, 16); margin-right: 10px;"></i>
        <h1 class="custom-title">GROUP1 SPORTS</h1>
        <div class="search-bar">
            <input type="text" placeholder="Nhập từ khóa tìm kiếm...">
            <button type="submit">Tìm kiếm</button>
            <a href="giohang.html"><img src="images/gio.png" alt="Giỏ" id="Shopping-Cart"></a>
        </div>
        <div class="auth-buttons">
            <a href="dangnhap.html">Đăng Nhập</a>
            <a href="dangky.html">Đăng Ký</a>
        </div>
    </header>

    <div>
        <img src="images/bad.jpg" alt="bia" width="1513" height="250" />
    </div>

    <nav>
        <a href="#">Trang Chủ</a>
        <div class="dropdown">
            <a href="#" class="dropdown-btn">Sản Phẩm <span class="arrow">&#9662;</span></a>
            <div class="dropdown-content">
                <a href="#">Giày Cầu Lông</a>
                <a href="#">Áo Cầu Lông</a>
                <a href="#">Vợt Cầu Lông</a>
                <a href="#">Cầu Lông</a>
                <a href="#">Phụ Kiện</a>
            </div>
        </div>
        <a href="#">Khuyến Mại</a>
        <a href="#">Giỏ Hàng</a>
        <a href="#">Liên Hệ</a>
    </nav>

    <div class="main-content">
        <div class="vertical-title">
            <span>S</span><span>Ả</span><span>N</span><span>P</span><span>H</span><span>Ẩ</span><span>M</span>
        </div>

        <div class="products">
            <?php include 'xulyproduct.php'; ?>
            
        </div>

        <div class="sidebar">
            <h3>Danh Mục</h3>
            <ul>
                <li><a href="banchay.html">Sản Phẩm Bán Chạy</a></li>
                <li><a href="#">Sản Phẩm Mới</a></li>
                <li><a href="#">Khuyến Mại</a></li>
                <li><a href="#">Liên Hệ</a></li>
            </ul>
        </div>
    </div>

    <div class="pagination">
        <a href="#" class="prev">« Trước</a>
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#" class="next">Tiếp theo »</a>
    </div>

    <div class="news-section">
        <h2>Tin Tức Mới Nhất</h2>

        <div class="news-item">
            <h3>Giới thiệu Giày Cầu Lông Mới</h3>
            <p>Giày cầu lông Li-Ning mới nhất đã có mặt tại cửa hàng với nhiều tính năng ưu việt. Xem thêm...</p>
            <a href="#">Xem Chi Tiết</a>
        </div>

        <div class="news-item">
            <h3>Áo Cầu Lông Li-Ning cho Nam</h3>
            <p>Áo cầu lông Li-Ning mang lại sự thoải mái và hiệu suất cao cho các vận động viên. Đọc thêm...</p>
            <a href="#">Xem Chi Tiết</a>
        </div>

        <div class="news-item">
            <h3>Khuyến Mại Mới Từ Li-Ning</h3>
            <p>Khuyến mãi đặc biệt với giá giảm cho các sản phẩm Li-Ning. Đừng bỏ lỡ cơ hội này! Chi tiết...</p>
            <a href="#">Xem Chi Tiết</a>
        </div>
    </div>

    <footer>
        <p>LIÊN HỆ</p>
        <p>Hotline: 0369852147</p>
        <p>Gmail: thuanthien2109@gmail.com</p>
        <p>&copy; 2025 BY GROUP 1 SPORTS</p>
    </footer>
</body>

</html>
