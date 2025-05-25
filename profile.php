<?php
require 'config.php';
require 'functions.php';

redirect_if_not_logged_in();

$id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT name, gender, email, address, phone FROM users WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($name, $gender, $email, $address, $phone);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thông tin tài khoản</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
            padding: 20px;
        }
        .info {
            padding-right: 30px;
        }
        .info h2 {
            margin-top: 0;
        }
        .info p {
            margin: 6px 0;
        }
        .logout-link {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 12px;
            background: #d9534f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .logout-link:hover {
            background: #c9302c;
        }
        .gif-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="info">
            <h2>Thông tin tài khoản</h2>
            <p><strong>Tên:</strong> <?= htmlspecialchars($name) ?></p>
            <p><strong>Giới tính:</strong> <?= htmlspecialchars($gender) ?></p>
            <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
            <p><strong>Địa chỉ:</strong> <?= htmlspecialchars($address) ?></p>
            <p><strong>SĐT:</strong> <?= htmlspecialchars($phone) ?></p>
            <a href="logout.php" class="logout-link">Đăng xuất</a>
        </div>
        <div class="gif-container">
            <div class="tenor-gif-embed" data-postid="16526337837066300772" data-share-method="host" data-aspect-ratio="1.04622" data-width="200px">
                <a href="https://tenor.com/view/celebration-happy-yay-yes-handsup-gif-16526337837066300772">GIF</a>
            </div>
        </div>
    </div>

    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
</body>
</html>
