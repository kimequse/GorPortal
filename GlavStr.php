<?php
    session_start();
    require_once 'settings/connect.php';

    $i=0;

    $sql = "SELECT * FROM `problems` WHERE `status`='Решена' ORDER BY ID DESC LIMIT 3";
    $result = $connect->query($sql);
    while($array11[$i]=$result->fetch_array()){
        $i++;
    }
    // if ($result->num_rows > 0) {
        // while($row = $result->fetch_assoc()) {
            // echo "Привет, " . $row["problema"] . " " . $row["status"] . "<br>";
        // }
    // } 
    // else {}
    
    $sql1 = "SELECT COUNT(*) as 'total' FROM `problems` WHERE`status`='Решена' ";
    $result1=$connect->query($sql1);

    if($result1->num_rows>0){
        $row1=$result1->fetch_assoc();
    }

    $sql2 = "SELECT COUNT(*) as 'totall' FROM `problems` WHERE`status`='Новое' ";
    $result2=$connect->query($sql2);

    if($result2->num_rows>0){
        $row2=$result2->fetch_assoc();
    }

?>


<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Городской портал</title>
        <link rel="stylesheet" href="css1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>

        <header class="header">
            <img src="img/icon.png"/>
            <div class="buttons">
                <a href="Regist.php"><input type="button" value="Регистрация" class="reg"/></a>
                <a href="Auth.php"><input type="button" value="Войти" class="vhod"/></a>
            </div>
        </header>

        <div class="nazv">
            <div class="name">
                <h1 class="name1">Решенные проблемы</h1>
            </div>
        </div>

        <div class="main">

            
        </div>





        <div class="time">
        <?
        for($j=0; $j<$i; $j++){
            echo'
            <div class="time1">
                <p class="textimg">'.$array11[$j]['problema'].'</p>
                <p class="texttime">'.$array11[$j]['status'].'</p>
                <div class="divtime">
                    <p class="tixtintime">'.$array11[$j]['nameofprob'].'</p>
                </div>
            </div>';
        }
        ?>
        </div>




        <div class="window">
            <div class="window1">

                <div class="numbers">
                    <p class="windtext"><? echo $row2['totall']  ?></p>
                    <p class="windtext"><? echo $row1['total']  ?></p>
                    <p class="windtext" id="counter">2 888</p>
                    <p class="windtext">270 873</p>
                </div>

                <div class="numbtext">
                    <p class="windtext1">НОВЫЕ ПРОБЛЕМЫ</p>
                    <p class="windtext1">ПРОБЛЕМ РЕШЕНО</p>
                    <p class="windtext1">ПРИНЯТО В РАБОТУ ЗА ПРЕДЫДУЩИЙ РАБОЧИЙ ДЕНЬ</p>
                    <p class="windtext1">ПОЛЬЗОВАТЕЛЕЙ</p>
                </div>
            </div>
        </div>

        <div class="footer">
           <p class="foottext">Сообщите о проблемах нашего города</p>
        </div>

        <footer class="input">
            <input placeholder="Мусор на газонах вдоль проезжей части" class="input1">
            <button class="button" onclick="incrementCounter()">Скрипт</button> 
         </footer><br><br>
            <audio id="audio" src="cat.mp3"></audio>
            <script>
                let counterValue = 2888;
                const counterElement = document.getElementById('counter');
                const audioElement = document.getElementById('audio');

                function incrementCounter() {
                    counterValue++;
                    counterElement.innerText = counterValue;
                    animateCounter();
                    playAudio();
                }

                function animateCounter() {
                    counterElement.style.fontSize = '50px';
                    setTimeout(() => {
                        counterElement.style.fontSize = '24px';
                    }, 200);
                }

                function playAudio() {
                    audioElement.play();
                }
            </script>
</html>
