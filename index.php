<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>БАРБЕРШОП "БОРОДИНСКИЙ"</title>
    <link rel="stylesheet" href="/styles/common.css" type="text/css"/>
    <link rel="stylesheet" href="/styles/main.css" type="text/css"/>
</head>
<body>
<?php include 'includes/main-nav.php';?>
<div class="general-logo">
    <a href="/index.php"><img src="img/logo.png" width="368" height="204" alt="Барбершоп &laquo;Бородинский&raquo;"></a>
</div>
<section class="features">
    <div class="features-item">
        <b class="features-name">БЫСТРО</b>
        <p>МЫ ДЕЛАЕМ СВОЮ РАБОТУ БЫСТРО! ДВА ЧАСА ПРОЛЕТЯТ НЕЗАМЕТНО И ВЫ - СЧАСТЛИВЫЙ ОБЛАДАТЕЛЬ СТИЛЬНОЙ СТРИЖКИ-МИНУТКИ!</p>
    </div>
    <div class="features-item">
        <b class="features-name">КРУТО</b>
        <p>ЗАБУДЬТЕ, КАК ВЫ СТРИГЛИСЬ РАНЬШЕ. МЫ СДЕЛАЕМ ИЗ ВАС ЗВЕЗДУ ФУТБОЛА ИЛИ КИНО! ВО ВСЯКОМ СЛУЧАЕ ВНЕШНЕ.</p>
    </div>
    <div class="features-item">
        <b class="features-name">ДОРОГО</b>
        <p>НАШИ МАСТЕРА - ПРОФЕССИОНАЛЫ СВОЕГО ДЕЛА И НЕ МОГУТ СТОИТЬ ДЁШЕВО. К ТОМУ ЖЕ, РАЗВЕ ЦЕНА НЕ ДАЁТ ОПРЕДЕЛЁННЫЙ СТАТУС?</p>
    </div>
</section>
<div class="index-content">
    <div class="index-content-left">
        <h2 class="index-content-title">НОВОСТИ</h2>
        <ul class="news-preview">
            <li>
                <p>СЕКРЕТЫ МЯГКОЙ И ПОСЛУШНОЙ БОРОДЫ</p>
                <time datetime="2016-01-11">25 ЯНВАРЯ</time>
                <a href="/secretsofbeard.php">Подробнее</a>
            </li>
            <li>
                <p>В НАШЕЙ КОМАНДЕ ПОПОЛНЕНИЕ, БОРИС "БРИТВА" СТРИГУНЕЦ!</p>
                <time datetime="2016-01-18">18 ЯНВАРЯ</time>
                <a href="/BorisStrigunec.php">Подробнее</a>
            </li>
            <li>
                <p>НАМ НАКОНЕЦ ЗАВЕЗЛИ ЯГЕРМЕЙСТЕР!</p>
                <time datetime="2016-01-11">11 ЯНВАРЯ</time>
                <a href="/Jagermayster.php">Подробнее</a>
            </li>
        </ul>
        <a class="btn-news" href="/news.php">ВСЕ НОВОСТИ</a>
    </div>
    <div class="index-content-right">
        <h2 class="index-content-title">ФОТОГАЛЕРЕЯ</h2>
        <div class="gallery">
            <figure class="gallery-content">
                <img src="img/logo.png" width="286" height="164" alt="">
                <img src="img/logo.png" width="286" height="164" alt="">
            </figure>
            <button class="btn gallery-prev" type="button">НАЗАД</button>
            <button class="btn gallery-next" type="button">ВПЕРЁД</button>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="index-content">
    <div class="index-content-left">
        <h2 class="index-content-title">КОНТАКТНАЯ ИНФОРМАЦИЯ</h2>
        <p>
            БАРБЕРШОП "БОРОДИНСКИЙ"<br>
            АДРЕС: Г. САНКТ-ПЕТЕРБУРГ, Б. КОНЮШЕННАЯ, Д.19/8<br>
            ТЕЛЕФОН: +7 (812) 666-02-66
        </p>
        <p>
            ВРЕМЯ РАБОТЫ:<br>
            ПН-ПТ: С 10:00 ДО 22:00<br>
            СБ-ВС: С 10:00 ДО 19:00
        </p>
        <a class="btn" href="#">КАК ПРОЕХАТЬ</a>
        <a class="btn" href="#">ОБРАТНАЯ СВЯЗЬ</a>
    </div>
    <div class="index-content1">
        <div class="index-content-right">
            <h2 class="index-content-title">ЗАПИСАТЬСЯ</h2>
            <p>УКАЖИТЕ ЖЕЛАЕМУЮ ДАТУ И ВРЕМЯ И МЫ СВЯЖЕМСЯ С ВАМИ ДЛЯ ПОДТВЕРЖДЕНИЯ БРОНИ</p>
            <form class="appointment-form" action="https://echo.htmlacademy.ru" method="post">
                <input type="text" name="date" value="" placeholder="ДАТА">
                <input type="text" name="time" value="" placeholder="ВРЕМЯ">
                <input type="text" name="name" value="" placeholder="ВАШЕ ИМЯ">
                <input type="tel" name="phone" value="" placeholder="ТЕЛЕФОН">
            </form>
            <div class="btn-application"><button class="btn" type="submit">ОТПРАВИТЬ</button></div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>
</body>
</html>