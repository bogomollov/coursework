<?php
    include('db.php');
    $orders = $db->prepare("SELECT * FROM Orders");
    $orders->execute();
    $rows = $orders->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заявки</title>
</head>
<body>
<div class="orders-window">
    <div class="orders-content">
        <div class="title">
            <a>ID заявки</a>
            <a>ID клиента</a>
            <a>E-mail клиента</a>
            <a>Тариф</a>
        </div>
        <div class="orders-info">
            <?php
            foreach ($rows as $key => $row) {
                echo $row['id'] . $row['client'] . $row['email'] . $row['tarif'] . '<br>';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>