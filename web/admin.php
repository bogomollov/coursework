<?php
    include('db.php');
    $orders = $db->prepare("SELECT * FROM Orders");
    $orders->execute();
    $rows = $orders->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $key => $row) {
        $id = $row['id'];
        $client = $row['client'];
        $email = $row['email'];
        $tarif = $row['tarif'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css?v=3.4.2">
    <link rel="stylesheet" href="popup.css?v=3.4.2">
    <title>Заявки</title>
</head>
<body>
<div id="orders">
<div class="orders-window">
    <div class="orders-content">
        <div class="orders-table">
            <div class="orders-info">
                <a>ID заявки</a>
                <a><?php echo $id;?></a>
            </div>
            <div class="orders-info">
                <a>ID клиента</a>
                <a><?php echo $client;?></a>
            </div>
            <div class="orders-info">
                <a>E-mail клиента</a>
                <a href="mailto:<?php echo $email?>"><?php echo $email?></a>
            </div>  
            <div class="orders-info">
                <a>Тариф</a>
                <a><?php echo $tarif;?></a>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>