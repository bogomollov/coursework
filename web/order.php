<?php
    session_start();
    include('db.php');

    $tarif = $_POST['tarif'];
    $email = $_POST['email'];
    $client = $_COOKIE['username'];

    if (!isset($client)) {
        header("Location: popup.php");
        exit();
    }
    else {
        $select = $db->prepare("SELECT `id` FROM Users WHERE `username` = ?");
        $select->execute(array($client));
        $user_id = $select->fetch(PDO::FETCH_COLUMN);

        $insert = $db->prepare("INSERT INTO Orders (tarif, client, email) VALUES (:tarif, :client, :email)");
        $insert->execute(['tarif' => $tarif, 'client' => $user_id, 'email' => $email]);
        header("Location: index.php");
        exit();
    }