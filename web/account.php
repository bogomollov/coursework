<?php
    if (isset($_COOKIE['username'])) {
        echo '<a id="account">' . $_COOKIE['username'] . '</a>';
        echo "<button class='register' id='register'>";
        echo "<a>Выйти из аккаунта</a>";
        echo "</button>";
    }
    else {
        echo '<div class="login" id="login">
        <a href="popup.php">Вход</a>
    </div>
    <a href="popup.php">
        <button class="register" id="register">
            Регистрация
        </button>
    </a>';
    }