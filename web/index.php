<?php
    include("db.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css"/>
    <title>Главная</title>
</head>
<body>
    <div class="body-wrapper">
        <header>
            <div class="header-menu">
                <div class="logo">
                    <img src="./images/icon.png" width="64" height="64">
                </div>
                <div class="vertical-line">
                    <img src="./images/line.svg"/>
                </div>
                <div class="virtual-servers">
                    <a href="#">Виртуальные сервера</a>
                    <img src="./images/arrow.svg" width="10" height="10">
                </div>
                <div class="dedicated-servers">
                    <a href="#">Выделенные сервера</a>
                </div>
                <div class="cloud-hosting">
                    <a href="#">Облачный хостинг</a>
                </div>
                <div class="web-hosting">
                    <a href="#">Веб-хостинг</a>
                </div>
            </div>
            <div class="header-account">
                <div class="login">
                    <a href="#">Вход</a>
                </div>
                <button class="register">
                    <a href="#">Регистрация</a>
                </button>
            </div>
        </header>
    </div>
</body>
</html>