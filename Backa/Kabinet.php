<?php
require('DB.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новопашин - Личный кабинет</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<!-- nav -->
	<nav class="navbar navbar-expand-lg fixed-top">
		<a class="navbar-brand" href="index.html">Главная</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
		data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span> 
		 </button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-4">
				<li class="nav-item">
					<a class="nav-link" data-value="about" href="#">Обо мне</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-value="portfolio" href="indexGALLERY.html" target="_blank">Портфолио</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-value="blog" href="#">Блог</a
>				</li>
				<li class="nav-item">
					<a class="nav-link" data-value="team" href="#">Команда</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-value="contact" href="indexCONTACT.html" target="_blank">Контакты</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-value="Catalog" href="Catalog.html">Каталог</a>
				</li>
				<li class="nav-item">
					<a class="nav-link reg" data-value="kabinet" href="Kabinet.html">Личный кабинет</a>
				</li>
				<li class="nav-item">
					<a class="nav-link reg" data-value="exit" href="index.html">Выход</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- forma -->

	<div class="forma">
	 	<div class="container">
	 		 <form action="ScriptKabinet.php" method="post">
	 			<label>Введите ваше имя: <input type="text" name="name" ></label><br>
	 			<label>Введите вашу фамилию: <input type="text" name="last" ></label><br>
	 			<label>Введите вашу почту: <input type="text" name="email" ></label><br>
	 			<label>Расскажите о себе: <textarea name="opisanie" rows="3"></textarea></label><br>
	 			<label>Введите ваш адрес: <input type="text" name="adress"></label><br>
	 			<label>Введите вашу дату рождения: <input type="date" name="date"></label><br>
	 			<p>Смена пароля</p>
	 			<label>Введите старый пароль: <input type="password" name="password1" ></label><br>
	 			<label>Введите новый пароль: <input type="password" name="password2" ></label><br>
	 			<input type="submit" name="INFA" value="Сохранить">
	 		</form>
	 	</div>
	 </div>
	 
	<!-- footer -->

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 cold-sm-12 left">
					<nav class="navbar navbar-expand-lg">
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mr-4">
								<li class="nav-item">
									<a class="nav-link" data-value="about" href="#">Обо мне</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-value="portfolio" href="#">Портфолио</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-value="blog" href="#">Блог</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-value="team" href="#">Команда</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-value="contact" href="#">Контакты</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-value="socseti" href="#">Соц.сети</a>
								</li>
							</ul>
						</div>
					</nav>
						<hr>
					<div class="center">
						<div class="studio">
							<p>Студия веб-дизайна Studio<br>
							2019</p>
						</div>
					</div>
				</div>
				
				<div class="col-lg-4 col-md-4 cold-sm-12 right" id="socseti">
					<h1>Соц.сети</h1>
					<ul class="foot-link">
						<li>
							<a class="soc-link" href="#">vk.com</a>
						</li>
						<li>
							<a class="soc-link" href="#">email@mail.com</a>
						</li>
						<li>
							<a class="soc-link" href="#">@instagram</a>
						</li>

					</ul>
				</div>
			</div>			
		</div>
	</div>



	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>