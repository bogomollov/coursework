<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="auth.css?v=3.4.2">
    <title>Регистрация</title>
</head>
<body>
    <div id="popup">
        <div class="window-content">
            <form action="index.php" method="post">
                <div class="username">
                    <h3>Имя пользователя</h3>
                    <input type="text" name="username" required>
                </div>
                <div class="password">
                    <h3>Пароль</h3>
                    <input type="password" name="password" required>
                </div>
                <button><small>Зарегистрироваться</small></button>
            </form>
        </div>
    </div>
</body>
</html>