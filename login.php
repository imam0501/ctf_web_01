<?php
require 'config.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hash);
        $stmt->fetch();
        if (password_verify($password, $hash)) {
            $_SESSION['user_id'] = $id;
            header('Location: profile.php');
            exit;
        } else {
            echo "Sai mật khẩu.";
        }
    } else {
        echo "Không tìm thấy người dùng.";
    }
}
?>

<form method="POST">
    <!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial;
            background-color: #e8f0fe;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-box {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px #bbb;
            width: 200px;
        }
        .login-box h2 {
            text-align: center;
        }
        .login-box input {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
        }
        .login-box button {
            margin-top: 12px;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
        }
        .gif {
            display: block;
            margin: 10px auto;
            width: 100px;
        }
    </style>
</head>
<body>
    <form method="POST" class="login-box">
        <h2>Đăng nhập</h2>
      <div class="tenor-gif-embed" data-postid="5424494688013320912" data-share-method="host" data-aspect-ratio="0.566265" data-width="100%"><a href="https://tenor.com/view/cool-fun-white-cat-dance-cool-and-fun-times-gif-5424494688013320912">Cool Fun GIF</a>from <a href="https://tenor.com/search/cool-gifs">Cool GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        <input name="email" placeholder="Email" type="email" required><br>
        <input name="password" type="password" placeholder="Mật khẩu" required><br>
        <button type="submit">Đăng nhập</button>
        <p style="text-align:center; margin-top:10px;">
    Bạn chưa có tài khoản? <a href="register.php">Đăng ký tại đây</a>
</p>
    </form>
</body>
</html>

