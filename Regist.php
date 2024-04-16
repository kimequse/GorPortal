<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Регистрация</title>
        <link rel="stylesheet" href="css1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <img src="img/icon.png"/>
            <div class="buttons">
                <a href="GlavStr.php"><input type="button" value="Назад" class="vhod"/></a>
            </div>
        </header>

        <div class="regr">
            <div class="regr1">
                <p class="textreg">Регистрация</p>
            </div>
        </div>
        <form action="settings/signup.php" method="POST">
        <div id="white">
            <div class="white">
                
                    <p class="inptext">Введите вашу фамилию*</p>
                    <input name="last" id="q1">
               
                    <p class="inptext">Введите ваше имя*</p>
                    <input name="first"  id="q2">

                    <p class="inptext">Введите ваше отчество*</p>
                    <input name="surname" id="q3">

                    <p class="inptext">Введите ваш email*</p>
                    <input name="email" id="q6">

                    <p class="inptext">Введите ваш логин</p>
                    <input name="login" id="q5">

                    <p class="inptext">Введите пароль*</p>
                    <input name="pass" id="q7">

                    <p class="inptext">Повторите пароль*</p>
                    <input name="pass1" id="q8">

                    <p class="inptext">
                        <?php
                            echo $_SESSION['message']??null;
                            unset ($_SESSION['message']);
                        ?>
                    </p>

                <div class="check">
                    <input type="checkbox">
                    <label class="lable">Я даю свое согласие на обработку персональных данных*</label>
                </div>
            </div>
        </div>
        <div id="divb">
            <button type="submit" class="registr">Зарегестрироваться</button>
        </div>
        
        </form>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" defer></script>
        <script src="val.js" defer></script>
    </body>
</html>