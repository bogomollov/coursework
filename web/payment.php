<?php 
    error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css?v=3.4.2">
    <link rel="stylesheet" href="popup.css?v=3.4.2">
</head>
<body>
    <div id="payment">
        <div class="window">
            <div class="payment-content">
                <div class="payment-title">
                <form action="order.php" method="post">
                    <h3>Тариф: <input type="text" name="tarif" value="<?php if ($_POST["Shared"]) {echo 'Shared ' . $_POST["Shared"];}
                    if ($_POST["VPS"]) {echo 'VPS ' . $_POST["VPS"];}
                    if ($_POST["VDS"]) {echo 'VDS ' . $_POST["VDS"];}
                    if ($_POST["Dedicated"]) {echo 'Dedicated ' . $_POST["Dedicated"];}?>" readonly></h3>
                    <a>Оставьте заявку для дальнейшей оплаты выбранной услуги</a>
                </div>
                    <div>
                        <h3>E-mail</h3>
                        <input type="email" name="email" maxlength="30" required>
                    <div>
                        <input type="submit" name="order" value="Заказать услугу" required>
                    </div>
                    </div>
                </form>
            </div>
        </div> 
    </div>
</body>
</html>