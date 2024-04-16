<?php
    session_start();
    include("db.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css?v=3.4.2">
    <title>Главная</title>
</head>
<body>
    <div class="body-wrapper">
        <header>
            <div class="header-menu">
                <div class="logo">
                    <a href="/"><img src="./images/icon.svg" width="64" height="64"></a>
                </div>
                <div class="vertical-line">
                    <img src="./images/line.svg" />
                </div>
                <div class="virtual-servers-menu">
                    <div class="virtual-servers">
                        <a>Виртуальные сервера</a>
                        <img src="./images/arrow.svg" width="10" height="10">
                    </div>
                    <div class="burger-menu">
                        <div class="menu-content">
                            <div class="shared" id="shared">
                                <p>Shared</p>
                                <small>Сбалансированная цена и качество</small>
                            </div>
                            <div class="vps" id="vps">
                                <p>VPS</p>
                                <small>Современные процессоры</small>
                            </div>
                            <div class="vds" id="vds">
                                <p>VDS</p>
                                <small>Максимальная производительность</small>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dedicated-servers">
                    <a id="dedicated">Выделенные сервера</a>
                </div>
                <div class="cloud-hosting">
                    <a id="cloud">Облачный хостинг</a>
                </div>
                <div class="web-hosting">
                    <a id="web">Веб-хостинг</a>
                </div>
            </div>
            <div class="header-account">
                <?php include("account.php");?>
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
        <section class="tarif-block" id="tarif">
            <div class="tarif-content">
                <div class="tarif-title">
                    <h2>Виртуальные сервера</h2>
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
        <section class="dedicated-block" id="tarif2">
            <div class="dedicated-content">
                <div class="dedicated-title">
                    <h2>Выделенные сервера</h2>
                </div>
                <div class="dedicated-list">
                    <div class="xeon">
                        <div class="list-item">
                            <div class="e3">
                                <div class="xeon-title">
                                    <h3>E3-1240</h3>
                                    <small>Intel Xeon E3-1240</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>4 Cores, 3.4-4.8 GHz</div>
                                    <div>8 GB DDR3</div>
                                    <div>2 x 480 GB HDD</div>
                                    <button><a href="#">4940₽/мес</a></button>
                                </div>
                            </div>
                            <div class="e3">
                                <div class="xeon-title">
                                    <h3>E3-1286v3</h3>
                                    <small>Intel Xeon E3-1286v3</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>4 Cores, 3.7-4.1 GHz</div>
                                    <div>16 GB DDR3</div>
                                    <div>2 x 480 GB HDD</div>
                                    <button><a href="#">6200₽/мес</a></button>
                                </div>
                            </div>
                            <div class="e3">
                                <div class="xeon-title">
                                    <h3>E3-2236</h3>
                                    <small>Intel Xeon E3-2236</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>6 Cores, 3.6-4.0 GHz</div>
                                    <div>32 GB DDR4</div>
                                    <div>2 x 480 GB HDD</div>
                                    <button><a href="#">7650₽/мес</a></button>
                                </div>
                            </div>
                            <div class="e3">
                                <div class="xeon-title">
                                    <h3>E5-2620</h3>
                                    <small>Intel Xeon E5-2620</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>12 Cores, 2.4-3.2 GHz</div>
                                    <div>32 GB DDR4</div>
                                    <div>2 x 480 GB HDD</div>
                                    <button><a href="#">8900₽/мес</a></button>
                                </div>
                            </div>
                            <div class="e3">
                                <div class="xeon-title">
                                    <h3>E5-2678v3</h3>
                                    <small>Intel Xeon E5-2678v3</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>24 Cores, 2.5-3.3 GHz</div>
                                    <div>64 GB DDR4</div>
                                    <div>2 x 1 TB SDD</div>
                                    <button><a href="#">10700₽/мес</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="intel core">
                        <div class="list-item">
                            <div class="i9">
                                <div class="intel-title">
                                    <h3>I9-9900</h3>
                                    <small>Intel Core i9-9900</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>8 Cores, 3.6-5.0 GHz</div>
                                    <div>8 GB DDR5</div>
                                    <div>2 x 1 TB SDD</div>
                                    <button><a href="#">11600₽/мес</a></button>
                                </div>
                            </div>
                            <div class="i9">
                                <div class="intel-title">
                                    <h3>I9-9900K</h3>
                                    <small>Intel Core i9-9900K</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>8 Cores, 3.0-5.8 GHz</div>
                                    <div>16 GB DDR5</div>
                                    <div>2 x 1 TB SDD</div>
                                    <button><a href="#">12900₽/мес</a></button>
                                </div>
                            </div>
                            <div class="i9">
                                <div class="intel-title">
                                    <h3>I5-14600KF</h3>
                                    <small>Intel Core i5-14600KF</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>14 Cores, 3.5-5.3 GHz</div>
                                    <div>32 GB DDR5</div>
                                    <div>2 x 1 TB SDD</div>
                                    <button><a href="#">14490₽/мес</a></button>
                                </div>
                            </div>
                            <div class="i9">
                                <div class="intel-title">
                                    <h3>I9-13900K</h3>
                                    <small>Intel Core i9-13900K</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>24 Cores, 3.0-5.8 GHz</div>
                                    <div>64 GB DDR5</div>
                                    <div>2 x 1 TB SDD</div>
                                    <button><a href="#">16490₽/мес</a></button>
                                </div>
                            </div>
                            <div class="i9">
                                <div class="intel-title">
                                    <h3>I9-14900K</h3>
                                    <small>Intel Core i9-14900K</small>
                                </div>
                                <div class="tarif-dedicated">
                                    <div>24 Cores, 3.2-6.0 GHz</div>
                                    <div>128 GB DDR5</div>
                                    <div>2 x 1 TB SDD</div>
                                    <button><a href="#">19900₽/мес</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="support-block">
            <div class="support-content">
                <div class="support-title">
                    <h2>Остались вопросы?</h2>
                </div>
                <div class="support-list">
                    <div class="support-item">
                        <div class="support-description">
                            <h3>Служба поддержки 24/7</h3>
                            <small>Получайте круглосуточную поддержку<br>от дружелюбных агентов Службы поддержки</small>
                            <div>
                                <button><a>Открыть чат</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="support-item">
                        <div class="support-description">
                            <h3>FAQ</h3>
                            <small>Множество FAQ с подробными объяснениями<br>различных вопросов</small>
                            <div>
                                <button><a>Подробнее</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="support-item">
                        <div class="support-description">
                            <h3>Всё о хостинге</h3>
                            <small>Огромная база руководств<br>для новичков и профессионалов</small>
                            <div>
                                <button><a>Ознакомиться</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="footer-list">
                <div class="footer-item">
                    <a>Информация</a>
                    <div class="footer-menu">
                        <small>Реферальная программа</small>
                        <small>Личный кабинет</small>
                        <small>О дата-центрах</small>
                        <small>Контакты</small>
                    </div>
                </div>
                <div class="footer-item">
                    <a>Продукты</a>
                    <div class="footer-menu">
                        <small>Виртуальные сервера</small>
                        <small>Выделенные сервера</small>
                        <small>Облачный хостинг</small>
                        <small>Веб-хостинг</small>
                    </div>
                </div>
                <div class="footer-item">
                    <a>Услуги</a>
                    <div class="footer-menu">
                        <small>Доменные имена</small>
                        <small>Балансировщики</small>
                        <small>Защита от DDoS</small>
                    </div>
                </div>
                <div class="footer-item">
                    <a>Техподдержка</a>
                    <div class="footer-menu">
                        <small>Обратиться в поддержку</small>
                        <small>Документация</small>
                        <small>FAQ</small>
                    </div>
                </div>
                <div class="footer-item">
                    <a>Социальные сети</a>
                    <div class="footer-menu">
                        <div class="socials">
                            <a href="#"><img src="images/vk.svg"></a>
                            <a href="#"><img src="images/tg.svg"></a>
                            <a href="#"><img src="images/whatsapp.svg"></a>
                            <a href="#"><img src="images/youtube.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="home.js?v=3.4.2"></script>
</body>
</html>