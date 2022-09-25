<?php

   session_start();
   require_once 'connect.php';

   $login = $_POST['login'];
   $password = md5($_POST['password']);
   $email = $_POST['email'];
   
   
   
   $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' 
   AND `password` = '$password' AND `email` = '$email'");
   if (mysqli_num_rows($check_user) > 0) {
      
      $user = mysqli_fetch_assoc($check_user);
      
      $_SESSION['user'] = [
          "id" => $user['id'],
          "login" => $user['login'],
          "email" => $user['email']
      ];
       
      header('Location: http://localhost/proekt/glav.php');

   } else {
       echo "Неверный логин или пароль";
   }

   ?>
  