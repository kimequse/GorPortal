<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Оформление заявки</title>
        <link rel="stylesheet" href="./p5.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <header>
        <img src="img/icon.png" alt="">
        <a href="LKab.php"><input class="vih" type="button" value=" назад "></a>
    </header>
    <div class="cont">
        <div class="im">
            <p class="text">Создание заявки</p>
        </div>
    </div>
    <form action="settings/create.php" method="post">
    <div class="opis">
        <div class="opr">
            <p class="gl1">описание проблемы*</p>
            <p class="ml1">кратко опишите вашу проблему</p>
        </div>
        <input name="problema" class="st1" type="text">

    </div>
    <div class="kat">
        <div class="krt">
            <p class="gl2">категория проблемы*</p>
            <p class="ml2">Может быть определена автоматически</p>
        </div>
        <div>
            <select class="st2" name="kat" id="select">
                <option>Выберете категорию</option>
                <option>дорожно-транспортные происшествия</option>
                <option>транспорт</option>
                <option>недвижимость и строительство</option>
                <option>здоровье</option>
                <option>ЖКХ</option>
                <option>добавить категорию</option>
            </select>
        </div>
    </div>
    <div class="nzv">
        <div class="naz">
            <p class="gl3">название проблемы*</p>
        </div>
        <input name="prob" class="st3" type="text" class="fap">
    </div>
    <button type="submit" class="otp">Отправить</button>
</form>


<footer>

</footer>



</body>