<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="ru">

	<head>

		<meta charset="utf-8">

		<title>Авторизация</title>
		

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<link rel="shortcut icon" href="https://i.yapx.ru/T1Pko.png" type="image/png">
		

		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#36A26B">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#36A26B">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#36A26B">

		<style>body { opacity: 0; overflow-x: hidden; } html { background-color: #fff; }</style>

		<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;1,200&display=swap" rel="stylesheet">

	</head>
	<body>
		<div class="wrapper_white">
       <div class="container">
        <div class="content2">
          <div class="text_vhod">
            Вход
          </div>
          <form class="form-control" action="php/signin.php" method="post">
            <label>Логин</label>
						<input type="text" name='login' placeholder="Введите логин" >
						<label>Пароль</label>
						<input type="password" name='password' placeholder="Введите пароль">
						<label>Почта</label>
						<input type="password" name='email' placeholder="Введите почту">
            <button class="butt_vhod" type='submit'>Войти</button>
						<div class="net_akka">
						<p>
							Нет аккаунта? - <a href="registr.php" class="zareg">Зарегистрируйтесь</a>
						</p>
					</div>
          </form>
        </div>
       </div>
    </div>

		<!-- libs -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic">
		<link rel="stylesheet" href="libs/bootstrap-grid.min.css">
		<link rel="stylesheet" href="libs/jquery.fancybox.min.css">
		<link rel="stylesheet" href="libs/animate.css">
		

		
		

		<script src="libs/jquery/dist/jquery.min.js"></script>
		<script src="libs/jquery.fancybox.min.js"></script>
		<script src="libs/wow.min.js"></script>

		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/adaptive.css">
    
		<script src="js/common.js"></script>
		<script src="http://localhost/proekt/signin.php"></script>

	</body>
	</html>