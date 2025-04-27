<?php
// Kết nối database
$connect = mysqli_connect('localhost', 'root', '', 'group'); // 'group' là tên database

if (!$connect) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $product = mysqli_fetch_assoc($result);
    } else {
        echo "<p>Không tìm thấy sản phẩm.</p>";
        exit;
    }
} else {
    echo "<p>Không có ID sản phẩm.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">
    
<head>
    <meta charset="UTF-8">
    <title><?php echo htmlspecialchars($product['name']); ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }
        .container {
            display: flex;
            max-width: 1000px;
            width: 100%;
            background: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        }
        .product-image {
            flex: 1;
            background: #fafafa;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .product-image img {
            max-width: 100%;
            max-height: 500px;
            object-fit: contain;
        }
        .product-info {
            flex: 1;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .product-info h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }
        .product-info p.description {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .price {
            font-size: 26px;
            color: #ee4d2d;
            font-weight: bold;
            margin-bottom: 30px;
        }
        .buttons {
            display: flex;
            gap: 15px;
        }
        .buttons button {
            flex: 1;
            background-color:rgb(97, 90, 89);
            border: none;
            padding: 15px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .buttons button:hover {
            background-color: #d7381c;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="product-image">
        <img src="images/<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>">
    </div>
    <div class="product-info">
        <div>
            <h1><?php echo htmlspecialchars($product['name']); ?></h1>
            <p class="description"><?php echo nl2br(htmlspecialchars($product['description'])); ?></p>
            <p class="price"><?php echo number_format($product['price']); ?> ₫</p>
        </div>
        <div class="buttons">
            <button>Thêm vào giỏ hàng</button>
            <button>Mua ngay</button>
        </div>
    </div>
</div>

</body>
</html>
