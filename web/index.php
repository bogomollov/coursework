<?php
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
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css" />
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
                    <img src="./images/line.svg" />
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
                    <p>Информация</p>
                    <div class="footer-menu">
                        <small>Реферальная программа</small>
                        <small>Личный кабинет</small>
                        <small>О дата-центрах</small>
                        <small>Контакты</small>
                    </div>
                </div>
                <div class="footer-item">
                    <p>Продукты</p>
                    <div class="footer-menu">
                        <small>Виртуальные сервера</small>
                        <small>Выделенные сервера</small>
                        <small>Облачный хостинг</small>
                        <small>Веб-хостинг</small>
                    </div>
                </div>
                <div class="footer-item">
                    <p>Услуги</p>
                    <div class="footer-menu">
                        <small>Доменные имена</small>
                        <small>Балансировщики</small>
                        <small>Защита от DDoS</small>
                    </div>
                </div>
                <div class="footer-item">
                    <p>Техподдержка</p>
                    <div class="footer-menu">
                        <small>Обратиться в поддержку</small>
                        <small>Документация</small>
                        <small>FAQ</small>
                    </div>
                </div>
                <div class="footer-item">
                    <p>Социальные сети</p>
                    <div class="footer-menu">
                        <div class="socials">
                            <img src="images/vk.svg">
                            <img src="images/tg.svg">
                            <img src="images/whatsapp.svg">
                            <img src="images/youtube.svg">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>