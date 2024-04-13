<?php
    include('db.php');

    $username = $_POST["username"];
    $password = $_POST["password"];

    $valid = $db->prepare("SELECT * FROM `Users` WHERE `username` = :username");
    $valid->execute(['username' => $username]);
    $rows = $valid->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $key => $row) {
        if (!isset($row['username'])) {
            $insert = $db->prepare("INSERT INTO `Users` (`username`, `password`) VALUES (:user, :pass)");
            $insert->execute([':user' => $username, ':pass' => $password]);
        }
        elseif ($row['username'] && $row['password'] == $username && $password) {
            $_SESSION['id'] = $row['id'];
            setcookie("username", $username);
            header("Location: /");
            exit();
        }
        else echo "Неправильный пароль";
    }