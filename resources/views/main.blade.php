<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
    <style>
        @font-face {
            font-family: 'Montserrat';
            src: url('fonts/Montserrat/static/Montserrat-Bold.ttf') format('truetype');
        }
        body{
            background-image: url("images/main_back.png");
            font-family: Montserrat;
            width: 100vw;
            height: 100vh;
            background-size: 100% auto; 
            background-repeat: no-repeat;
            max-height: 1920px;
        }
        .head{
            padding-left: 150px;
            padding-top: 45px;
            display: flex;
            justify-content: space-between;
        }
        ul{
            display: flex;
            justify-content: space-evenly;
            list-style-type: none;
            width: 1200px;
            font-size: 24px;
            margin-top: 46px;
        }
        img{
            width: 120px;
            height: 120px;
        }
        .main{
            float: right;
            text-align: right;
            padding-right: 200px;
            margin-top: 200px
        }
        .m-title{
            color: #D2691E;
            float: right;
            text-align: right;
            width: 623px;
            height: 156px;
            font-size: 64px;
            margin-bottom: 50px
        }
        a{
            text-decoration: none;
            color: white;
        }
        .m-text{
            width: 711px;
            text-align: right;
            height: 73px;
            font-size: 24px;
            color: white;
        }
    </style>
</head>
<body>
    <section class="head">
        <div><img src="images/logo.png" alt=""></div>
        <ul>
            <li><a href="">Главная</a></li>
            <li><a href="">О нас</a></li>
            <li><a href="">Вход</a></li>
        </ul>
    </section>
    <section class="main">
        <div class="m-title">Удобная система автоматизации</div>
        <div class="m-text">отслеживаетсяистория изменений закупки исоздание заказов для поставщика наоснове шаблонов.</div>
        <div class="m-button"></div>
    </section>
</body>
</html>