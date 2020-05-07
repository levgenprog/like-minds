<?php
include '../Edit/checks/user_inf.php';
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Авторизация</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Авторизация</a></h1>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>DIPLOMA: Авторизация прошла успешно!</h2>
							<p>СОЦИАЛЬНАЯ СЕТЬ ДЛЯ НЕТВОРКИНГА
								<br/> АМБИЦИОЗНЫХ ЛЮДЕЙ

							<h1>Добро пожаловать, <?=$current_user['user_name']?>. Чтобы выйти, нажми <a href="exit.php">здесь</a> </h1>
                            <ul class="actions special">
								<li><a href="../Edit/personal.php" class="button primary">Перейти в личный кабинет</a></li>
							</ul>

						</div>

					</section>

				<!-- One -->


				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; Diploma</li><li>Made by connection_in_isolation</li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
