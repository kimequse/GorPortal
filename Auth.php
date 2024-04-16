<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="./gor2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <header>
        <div class="shapka">
            <img src="img/icon.png" alt="logotype">
                <a href="GlavStr.php"><input class="bak" type="button" value=" Назад"></a>
        </div>
    </header>
    
    <div class="cent">
        <div class="avt">
            <p class="text">Авторизация</p>
        </div>
    </div>
    <form action="settings/signin.php" method="POST">
    <div class="aaa">
        <div class="boks">
            <p class="vv">Введите email/логин</p>
            <div class="div">
                <input name='login' id="login" type="text">
            </div>
            <p class="vv">Введите пароль</p>
            <div class="div">
                <input name='pass' id="password" type="password">
            </div>
            
        </div> 
    </div>

    <div class="vhod">
        <button type="submit" class="voy">Войти</button> 
    </div>
    <footer>
    
    </footer>

    <script src="./pass.js"></script>

</body>
</html>