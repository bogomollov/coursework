<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css?v=3.4.2">
    <link rel="stylesheet" href="popup.css?v=3.4.2">
</head>
<body>
    <div id="popup">
        <div class="window">
            <div class="window-content">
                <form action="auth.php" method="post">
                    <div class="username">
                        <h3>Имя пользователя</h3>
                        <input type="text" name="username" maxlength="16" required>
                    </div>
                    <div class="password">
                        <h3>Пароль</h3>
                        <input type="password" name="password" maxlength="16" required>
                    </div>
                    <input type="submit" value="Зарегистрироваться" id="submit">
                </form>
                <div class="login-content">
                <h3 id="login-title">Уже есть учетная запись?</h3>
                <button id="select-login">Войти в аккаунт</button>
            </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="popup.js?v=3.4.2"></script>
</body>
</html>