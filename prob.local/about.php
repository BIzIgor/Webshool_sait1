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
							<li><a href="about.php" class="head__nav__current-page">О себе</a></li>
							<li><a href="blog.php">Блог</a></li>
							<li><a href="gallery.php">Галерея</a></li>
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
		<div class="container">	
			<div class="page-about">	
				<div class="page-about__photo">
					<img src="https://www.kinonews.ru/insimgs/2017/newsimg/newsimg73931.jpg" alt="">
				</div>
				<div class="page-about__info_about">
					<p>
	                    <b>Хидэо Кодзима</b> (яп. 小島 秀夫 Кодзима Хидэо, 24 августа 1963, Токио) — японский геймдизайнер, сценарист и продюсер разработки компьютерных игр.Глава собственной студии по разработке компьютерных игр Kojima Productions, в прошлом — вице-президент Konami Digital Entertainment. Кодзима наиболее известен как создатель серии игр Metal Gear, а также квестов Snatcher и Policenauts. Он также выступал продюсером других игр и серий, в том числе Zone of the Enders, Boktai и Castlevania: Lords of Shadow.
	                </p>
				</div>	
			</div>
			<div class="krinfo">
				<ul>
					<li>Имя</li>
					<li>Фамилия</li>
					<li>Дата рождения</li>
					<li>Город</li>
					<li>Номер телефона</li>
					<li>E-mail</li>
				</ul>
			</div>
		</div>
	</section>
	<footer class="all-footer">
		<div class="links container">
			<div class="links_1">
				<h3>Контакты</h3>
				<b>Номер телефона</b>&ensp;+7 999 999 99 99<br>
				<b>E-mail</b>&ensp;qwerty@gmail.com
			</div>
			<div class="links_1">
				<h3>Соц.сети</h3>
				<div class="icons footer__info__social__icons">
					<a href="https://vk.com"><i class="fab fa-vk"></i></a>
					<a href="https://telegram.com"><i class="fab fa-telegram-plane"></i></a>
					<a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
				 </div>
			</div>
		</div>
	</footer>
</body>
</html>