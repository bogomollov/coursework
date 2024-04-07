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
                    <img src="./images/icon.svg" width="64" height="64">
                </div>
                <div class="vertical-line">
                    <img src="./images/line.svg"/>
                </div>
                <div class="virtual-servers">
                    <a>Виртуальные сервера</a>
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
        <section class="cloud-block">
            <div class="cloud-content">
                <div class="cloud-title">
                    <h1>Облачные сервера<br> от 399 ₽/мес</h1>
                </div>
                <div class="cloud-button">
                    <button><a href="#">Смотреть тарифы</a></button>
                </div>
            </div>
            <div class="cloud-img">
                <img src="images/cloud.png">
            </div>
        </section>
        <section class="tarif-block">
            <div class="tarif-content">
                <div class="tarif-title">
                    <h2>Тарифы</h2>
                </div>
                <div class="tarif-list">
                    <div class="tarif-shared">
                        <div class="tarif-text">
                            <div class="tarif-title">
                                <h3>Shared</h3>
                            </div>
                            <div class="shared-description">
                                <small>Сбалансированная цена и качество</small>
                            </div>
                        </div>
                        <div class="tarif-prices">
                            <div class="tarif">
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>1 CPU</div>
                                        <div>2 GB RAM</div>
                                        <div>30 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">399₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>2 CPU</div>
                                        <div>4 GB RAM</div>
                                        <div>60 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">849₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>4 CPU</div>
                                        <div>8 GB RAM</div>
                                        <div>120 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">1799₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>8 CPU</div>
                                        <div>16 GB RAM</div>
                                        <div>240 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">4299₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>16 CPU</div>
                                        <div>32 GB RAM</div>
                                        <div>480 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">6999₽/мес</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tarif-vps">
                        <div class="tarif-text">
                            <div class="tarif-title">
                                <h3>VPS</h3>
                            </div>
                            <div class="shared-description">
                                <small>Современные процессоры</small>
                            </div>
                        </div>
                        <div class="tarif-prices">
                            <div class="tarif">
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>1 CPU</div>
                                        <div>2 GB RAM</div>
                                        <div>30 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">549₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>2 CPU</div>
                                        <div>4 GB RAM</div>
                                        <div>60 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">999₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>4 CPU</div>
                                        <div>8 GB RAM</div>
                                        <div>120 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">2399₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>8 CPU</div>
                                        <div>16 GB RAM</div>
                                        <div>240 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">4899₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>16 CPU</div>
                                        <div>32 GB RAM</div>
                                        <div>480 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">7999₽/мес</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tarif-vds">
                        <div class="tarif-text">
                            <div class="tarif-title">
                                <h3>VDS</h3>
                            </div>
                            <div class="shared-description">
                                <small>Максимальная производительность</small>
                            </div>
                        </div>
                        <div class="tarif-prices">
                            <div class="tarif">
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>1 CPU</div>
                                        <div>2 GB RAM</div>
                                        <div>30 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">699₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>2 CPU</div>
                                        <div>4 GB RAM</div>
                                        <div>60 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">1399₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>4 CPU</div>
                                        <div>8 GB RAM</div>
                                        <div>120 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">2899₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>8 CPU</div>
                                        <div>16 GB RAM</div>
                                        <div>240 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">5499₽/мес</a></button>
                                    </div>
                                </div>
                                <div class="tarif-item">
                                    <div class="tarif-config">
                                        <div>16 CPU</div>
                                        <div>32 GB RAM</div>
                                        <div>480 GB SSD</div>
                                    </div>
                                    <div class="tarif-button">
                                        <button><a href="#">8999₽/мес</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>