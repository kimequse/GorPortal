<?php

    session_start();
    require_once 'connect.php';
    
    $ID_users = $_SESSION['iduser'];
    $kat = $_POST['kat'];
    $prob = $_POST['prob'];
    $problema = $_POST['problema'];

    if ( !empty($_REQUEST['problema'])and !empty($_REQUEST['prob']) ) {

        mysqli_query($connect, "INSERT INTO `problems`(`ID_users`, `nameofprob`, `kat`, `problema`) VALUES ('$ID_users','$prob','$kat','$problema')");
        $_SESSION['message'] = 'Обращение успешно отправлено';
        header('Location: ../LKab.php');

    } else{
        $_SESSION['message'] = 'Ошибка';
        header('Location: ../CreaZ.php');
    }

?>
