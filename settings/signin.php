<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $pass = ($_POST['pass']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
    if (mysqli_num_rows($check_user) > 0) {

        $qwerty = $check_user->fetch_array();
        $_SESSION['iduser'] = $qwerty['ID'] ;
        $_SESSION['last'] = $qwerty['last'];
        $_SESSION['first'] = $qwerty['first'];
        $_SESSION['surname'] = $qwerty['surname'];
        $_SESSION['email'] = $qwerty['email'];
        $_SESSION['login'] = $qwerty['login'];
        $_SESSION['pass'] = $qwerty['pass'];
        $_SESSION['status'] = $qwerty['status'];
        header('Location: ../LKab.php');

    } else {
        header('Location: ../Auth.php');
    }
    ?>
