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
    <link rel="stylesheet" href="./../libs/bootstrap.css">
    <script src="https://use.fontawesome.com/d7f609ebcd.js"></script>
    <title>Document</title>
</head>
<body>
<header>
    <nav class="nav">
        <div class="nav-item"><a href="/">Главная</a></div>
        <div class="nav-item dropdown"><a href="./../services/services.php">Услуги/Цены</a></div>
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
<div class="contacts">
    <div class="info">
        <h2>Как с нами связаться?</h2>
        <p>Электронная почта: kyievservice.job@gmail.com</p>
        <p>Онлайн чат: telegram.link</p>
        <p>Адрес: Киев ул. Неманская 10.</p>
        <p>kyivstar: 067 605 66 49</p>
        <p>life: 063 605 66 49</p>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d325516.3770455823!2d30.5326905!3d50.4020355!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1663245898042!5m2!1sru!2sua" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="callback_us">
    <div class="circle">
        <div class="phone"><i class="fa fa-phone" aria-hidden="true"></i></div>
        <div class="circle_outline">
        </div>
    </div>
    <link rel="stylesheet" href="./../callback_us.css">
</div>
<div class="callback_us_modal">
    <div class="inputs">
        <input class="form-control name" type="text" placeholder="Как к вам обращаться?">
        <input class="form-control phone" type="text" placeholder="Ваш номер телефона">
        <div class="buttons">
            <div class="btn btn-success senMessage">Отправить</div>
        </div>
    </div>
    <div class="thx_we_will_call_u">
        <p>Спасибо! Мы свяжемся с вами в ближайшее время.</p>
    </div>
    <div class="close_modal">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
</div>
</body>
<script src="./../libs/jquery-3.5.1.min.js"></script>
<script src="./../Class_father.js"></script>
<script src="./../header.js"></script>
<script>new Header('header')</script>
<script src="./../callback_us.js"></script>
<script src="./../env.js"></script>
<script>new Callback_us('.callback_us')</script>
</html>