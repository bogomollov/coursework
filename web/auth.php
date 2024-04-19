<?php
    session_start();
    include('db.php');

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == 'admin' and $password == 'admin') {
        header("Location: admin.php");
        exit();
    }

    $valid = $db->prepare("SELECT * FROM Users WHERE username=:username");
    $valid->execute(['username' => $username]);
    $rows = $valid->fetchAll(PDO::FETCH_ASSOC);

    if (isset($_POST['register'])) {      
        foreach ($rows as $key => $row) {
            if ($valid->rowCount() > 0) {
                header("Location: popup.php");
                exit();
            }
        }
        if ($valid->rowCount() == 0) {
            $insert = $db->prepare("INSERT INTO Users (username, password) VALUES (:username, :password)");
            $insert->execute(['username' => $username, 'password' => $password]);
            $_SESSION['id'] = $username;
            setcookie("username", $username);
            header("Location: /");
            exit();
        }
    }
    if (isset($_POST['login'])) {
        foreach ($rows as $key => $row) {
            if ($row['password'] != $password) {
                header("Location: popup.php");
                exit();
            }
            if ($row['username'] == $username && $row['password'] == $password) {
                $_SESSION['id'] = $row['id'];
                setcookie("username", $username);
                header("Location: /");
                exit();
            }
        }
    }