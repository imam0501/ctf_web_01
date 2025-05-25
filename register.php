<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f1f1f1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .wrapper {
            display: flex;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 12px #ccc;
            max-width: 700px;
        }
        .register-box {
            width: 300px;
            margin-right: 20px;
        }
        .register-box h2 {
            text-align: center;
        }
        .register-box input, .register-box select {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
        }
        .register-box button {
            margin-top: 12px;
            width: 100%;
            padding: 10px;
            background-color: #0077cc;
            color: white;
            border: none;
            cursor: pointer;
        }
        .gif-box {
            width: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .tenor-gif-embed {
            max-width: 100%;
            border-radius: 10px;
        }
        .message {
            width: 100%;
            text-align: center;
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 6px;
        }
        .success {
            background-color: #e0ffe0;
            color: #007700;
        }
        .error {
            background-color: #ffe0e0;
            color: #cc0000;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <form method="POST" class="register-box">
        <h2>Đăng ký</h2>

        <?php if (!empty($success)): ?>
            <div class="message success"><?= $success ?></div>
        <?php elseif (!empty($error)): ?>
            <div class="message error"><?= $error ?></div>
        <?php endif; ?>

        <input name="name" placeholder="Họ tên" required><br>
        <select name="gender">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
            <option value="Khác">Khác</option>
        </select><br>
        <input name="email" type="email" placeholder="Email" required><br>
        <input name="address" placeholder="Địa chỉ"><br>
        <input name="phone" placeholder="SĐT"><br>
        <input name="password" type="password" placeholder="Mật khẩu" required><br>
        <button type="submit">Đăng ký</button>
    </form>

    <div class="gif-box">
        <div class="tenor-gif-embed" data-postid="2048765052329044460" data-share-method="host" data-aspect-ratio="1.33155" data-width="100%">
            <a href="https://tenor.com/view/shaq-shimmy-excited-smile-gif-2048765052329044460">Shaq Shimmy GIF</a>
            from <a href="https://tenor.com/search/shaq-gifs">Shaq GIFs</a>
        </div>
        <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
    </div>
</div>

</body>
</html>
