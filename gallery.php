<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Галерея</title>
	<link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fd7d67ea1b.js" crossorigin="anonymous"></script>

</head>   
<body>
	<header class="header header_about" id="header">
		<div class="container">
			<div class="head"><div class="logo">Заядлый вархаммерист</div>
				<nav>
					<ul class="menu">
						<li><a href="index.php" >Главная страница</a></li>
						<li><a href="about.php" >О себе</a></li>
						<li><a href="blog.php">Блог</a></li>
						<li><a href="gallery.php"><b>Галерея</b></a></li>
						<li><a href="game.php">Игра</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<style>
    #gallery {
    background-color: white;
    justify-content: space-around;
    align-items: center;
    width: 80%;
}
.wrapper {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;

}

.gallery-line {
    width: 100%;
    display: flex;
    justify-content: space-around;
    margin-top: 10px;
    margin-bottom: 10px;
}

.image-box {
    width: 200px;
    height: 200px;
}

.min-image {
    width: 100%;
    height: 100%;
}

#big-image-box {
    display: flex;
    justify-content: center;
    width: 100%;
}

#big-image {
    max-width: 70%;
    max-height: 500px;
}

#buttons {
    display: none;
    justify-content: center;
}
</style>

<div class="wrapper">
    <div id="gallery">
        <div class="gallery-line">
            <div class="image-box">
                <img class="min-image" id="1" src="images/war.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="2" src="images/war1.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="3" src="images/war2.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="4" src="images/war3.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="5" src="images/war4.jpg">
            </div>
        </div>
        <div id="big-image-box"></div>
        <div id="buttons">
            <button onclick="prev()" id="prev_pic"><----сюдысь листай</button> <button onclick="next()" id="next_pic">тудысь листай----></button>
        </div>
        <div class="gallery-line">
            <div class="image-box">
                <img class="min-image" id="6" src="images/war5.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="7" src="images/war6.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="8" src="images/war7.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="9" src="images/war8.jpg">
            </div>
            <div class="image-box">
                <img class="min-image" id="10" src="images/war9.jpg">
            </div>
        </div>
    </div>
</div>        
<script src="script/script.js"></script>
</script>
	<footer class="footer_about">
		<div class="links container">
			<div class="links_1">
				<h3>Контакты</h3>
				<b>Номер телефона</b>&ensp;+7 927(632)-33-08<br>
				<b>E-mail</b>&ensp;ep233@yandex.ru
			</div>
			<div class="links_1">
				<h3>Соц.сети</h3>
				<ul class="icons">
					<li class="vk"><a href="https://vk.com"><i class="fab fa-vk"></i></a></li>
					<li class="telegram"><a href="#"><i class="fab fa-telegram-plane"></i></a></li>
					<li class="facebook"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
				</ul>
			</div>
		</div>
	</footer>
</body>
</html>