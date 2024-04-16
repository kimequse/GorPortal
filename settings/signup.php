<?php

    session_start();
    require_once 'connect.php';
    
    $last = $_POST['last'];
    $first = $_POST['first'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];   

   mysqli_query($connect, "INSERT INTO `users`(`last`, `first`, `surname`, `email`, `login`, `password`) VALUES ('$last','$first','$surname','$email','$login','$pass')"); 

        $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../Auth.php');

?>
