<?php

    session_start();
    require_once 'connect.php';
    
    $edi = $_SESSION['editer'];
    $kat = $_POST['kat'];
    $prob = $_POST['prob'];
    $problema = $_POST['problema']; 

    if ( !empty($_REQUEST['problema'])and !empty($_REQUEST['prob']) ) {

        mysqli_query($connect, "UPDATE `problems` SET `nameofprob`='$prob',`kat`='$kat',`problema`='$problema' WHERE `ID`='$edi'");
        $_SESSION['message'] = 'Обращение успешно отправлено';
        unset($_SESSION['editer']);
        header('Location: ../LKab.php');

    } else{
        $_SESSION['message'] = 'Ошибка';
        header('Location: ../EditZ.php');
    }

?>
