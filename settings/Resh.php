<?php

    session_start();
    require_once 'connect.php';

    $edi = $_SESSION['editer'];

    mysqli_query($connect, "UPDATE `problems` SET `status`='Решена' WHERE `ID`='$edi'");
    unset($_SESSION['editer']);
    header('Location: ../LKab.php');

?>
