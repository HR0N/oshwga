<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contacts.css">
    <link rel="stylesheet" href="./../settings.css">
    <link rel="stylesheet" href="./../main-info.css">
    <link rel="stylesheet" href="./../header.css">
    <title>Document</title>
</head>
<body>
<header>
    <nav class="nav">
        <div class="nav-item"><a href="/">Главная</a></div>
        <div class="nav-item dropdown"><a href="./../services/services.php">Услуги</a></div>
        <div class="nav-item"><a href="./../prices/prices.php">Цены</a></div>
        <div class="nav-item"><a href="./../contacts/contacts.php">Контакты</a></div>
    </nav>
</header>
<main>
    <div class="info">
        <div>
            <div class="work-time">
                <span>График работы:</span>
                <span>с <b>9:00</b> до <b>20:00</b></span>
            </div>
            <div class="phones">
                <span>067 605 66 46</span>
                <span>063 605 66 49</span>
            </div>
        </div>
    </div>
</main>

</body>
<script src="./../libs/jquery-3.5.1.min.js"></script>
<script src="./../Class_father.js"></script>
<script src="./../header.js"></script>
<script>new Header('header')</script>
</html>