<?php

   session_start();
   require_once 'connect.php';

   $login = $_POST['login'];
   $email = $_POST['email'];
   $password = $_POST['password'];

   if ($password === $password_confirm) {
    //con...
   } 
   
   
   $password = md5($password);
   
   mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`) 
   VALUES ('', '$login', '$email', '$password')");

   $_SESSION['message'] = 'Регистрация прошла успешно';
   header('Location: http://localhost/proekt/vhod.php');

?>
