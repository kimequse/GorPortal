<?php
    session_start();
    require_once 'settings/connect.php';

    $IDusers = $_SESSION['iduser'] ?? null;
    $i = 0;
    if($_SESSION['status'] =='Пользователь'){
    $select = $connect->query("SELECT * FROM `problems` WHERE `ID_users`='$IDusers'ORDER BY `ID`DESC");
    }
    else 
    $select = $connect->query("SELECT * FROM `problems` ORDER BY `ID`DESC");
    while($array1[$i]=$select->fetch_array()){
        $i++;
    }
    for($n=0; $n<$i; $n++){
        if(isset($_POST['delete_'.$n])){
            $dele = $array1[$n]['ID'];
            $connect->query("DELETE FROM `problems` WHERE `ID`='$dele'");
            header('Location: LKab.php');
            exit();
        }
        if(isset($_POST['edit_'.$n])){
            $edi = $array1[$n]['ID'];
            $_SESSION['editer'] = $edi;
            header('Location: EditZ.php');
            exit();
        }
        if(isset($_POST['resh_'.$n])){
            $edi = $array1[$n]['ID'];
            $_SESSION['editer'] = $edi;
            header('Location: settings/Resh.php');
            exit();
        }
    }

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Личный кабинет пользователя</title>
        <link rel="stylesheet" href="css1.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <img src="img/icon.png"/>
            <div class="buttons">
                <a href="settings/exit.php"><input type="button" value="Выйти" class="vhod"/></a>
            </div>
        </header>

        <div class="regr">
            <div class="regr1">
                <p class="textreg">Профиль</p>
            </div>
        </div>


        <div class="zav">
            <div class="zav1">
                <p class="zavtext">Мои заявки</p>
                <div class="sdd">
                <select class="spkat">
                    <option selected="selected">Выберите категорию</option>
                    <option>Новая</option>
                    <option>Решена</option>
                </select>

                <p class="ddd">статус заявки</p>
                </div>
            </div>
            <div class="cab">
                <div class="kabname">    
                    <p class="name2"><?= $_SESSION['last']?? null?> <?=$_SESSION['first']?? null ?></p>
                    <p class="name2"><?= $_SESSION['email'] ?? null ?></p>
                    <p class="name2"><?= $_SESSION['status'] ?? null ?></p>
                </div>    

                <div class="kabname1">
                    <?
                        if(isset($_SESSION['status']) && $_SESSION['status']=='Пользователь') echo '<a class="link" href="CreaZ.php">Создать заявку</a>';
                    ?>
                </div>
            </div>
            <div class="application">
                <?
                    for($j=0; $j<$i; $j++){
                        echo'
                    <div class="application4">

                        <div class="ravno">

                            <div class="data-time">
                                <p>Статус заявки</p>
                                <div class="';
                                if ($array1[$j]['status']=='Новое') echo 'new';
                                elseif ($array1[$j]['status']=='Решена') echo 'status';
                                echo'">
                                    <p id="resh">'.$array1[$j]['status'].'</p>
                                </div>
                            </div>

                            

                        </div>
                        <div class="h2">
                            <p class="h1">'.$array1[$j]['problema'].'</p>
                         </div>

                         <div class="kategory">
                            <p>'.$array1[$j]['kat'].'</p>
                         </div>

                         <div class="desc">
                            <div class="desc1">'.$array1[$j]['nameofprob'].'</div>
                         </div>

                        <form action="LKab.php" class="dell1" method="POST">
                        <div class="ravno11">';
                        if($_SESSION['status']=='Администратор') 
                        echo '
                        <input name="resh_'.$j.'" type="submit" class="dell6" value="решить проблему"> 
                        
                </div>
                            <input name="edit_'.$j.'" type="submit" class="dell" value="редактировать"> 
                            <input name="delete_'.$j.'" type="submit" class="dell" value="удалить">
                        </form>
                    </div>
                        
                        ';
                    }
                ?>

                </div>
        </div>

        
        <br><br>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script src="./xxx.js"></script>
    </body>
</html>