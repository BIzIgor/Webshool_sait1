<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Главаня страница</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/fontawesomecss/all.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
</head>
<body>
	<?php
		if(isset($_POST['log_out'])){
			unset ($_SESSION['user']);
			session_destroy();
		}
	?>
	<header class="header" id="header">
		<div class="container">
			<div class="all-head head">
				<div class="head__logo">
					Danil Markov
				</div>
				<div class="head__nav">	
					<nav>
						<ul class="head__nav__menu">
							<li><a href="index.php">Главная страница</a></li>
							<li><a href="about.php">О себе</a></li>
							<li><a href="blog.php">Блог</a></li>
							<li><a href="gallery.php" class="head__nav__current-page">Галерея</a></li>
							<li><a href="game.php">Игра</a></li>
						</ul>
						<?php
						if(!isset($_SESSION['user'])) {?>
						<div class="head__nav__login-btn"><a href="login.php">Войти</a></div>
						<?php
						} else {
							echo('<h4 class="head__nav__name">'.$_SESSION['user']['name']." ".$_SESSION['user']['lastname'].'</h4>'); 
							echo("<form action='' method='POST'><input type='SUBMIT' name='log_out' value='Выйти' class='logout-btn'</input></form>");
							}
							?>
					</nav>
				</div>	
			</div>
		</div>
	</header>
	<section>
			<div class="pictures">
				<div class="main-img">
					
				</div>
			</div>
			<div class="gallery">
				<div class="pack">
					<img src="images/ce9c6c6e659aeae1b3646192176dc5d7.jpg" alt="">
					<img src="images/QPGae2RaOsY.jpg" alt="">
					<img src="images/QYrUwCxB6kY.jpg" alt="">

				</div>
				<div class="pack">
					<img src="images/KLiyZRfn-80.jpg" alt="">
					<img src="images/95yBctU3Ygw.jpg" alt="">
					<img src="images/Без названия.jpg" alt="">
				</div>
			</div>
	</section>
	<footer class="footer_gallery">
		<div class="links container">
			<div class="links_1">
				<h3>Контакты</h3>
				<b>Номер телефона</b>&ensp;+7 999 999 99 99<br>
				<b>E-mail</b>&ensp;qwerty@gmail.com
			</div>
			<div class="links_1">
				<h3>Соц.сети</h3>
				<div class="icons social_icons">
					<a href="https://vk.com"><i class="fab fa-vk"></i></a>
					<a href="https://telegram.com"><i class="fab fa-telegram-plane"></i></a>
					<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
				 </div>
			</div>
		</div>
	</footer>
	<script src="js/scrpit_gallery.js.js"></script>
</body>
</html>