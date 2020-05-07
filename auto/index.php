<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DiplomaBrrro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
				<?php include "inc/header.php"; ?>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>DIPLOMA</h2>
							<p>СОЦИАЛЬНАЯ СЕТЬ ДЛЯ НЕТВОРКИНГА
<br /> АМБИЦИОЗНЫХ ЛЮДЕЙ
							<br />
							</p>

							<!--The autorisation and registration pane-->

                            <form method="post" action="auth.php">
								<h3>Заполните чтобы войти: </h3>
								<div class="row gtr-uniform">
									<div class="col-6 col-12">
										<span>Введите ваш e-mail: </span><br>
										<input type="text" name="email"  class="form-control" id="email" value="" placeholder="example@ex.com" />
										<br>
										<span>Введите пароль: </span><br>
										<input type="password" name="password" class="form-control" id="password" value=""/>
									</div>
								</div><br>
								<div class="actions stacked">
									<button class="button fit" type="submit">Авторизоваться</button>
								</div>
							</form>
                            <ul class="actions special">
								<li><a href="register.php" class="button primary">Зарегистрироваться</a></li>
							</ul>

						</div>
						<a href="#one" class="more scrolly"></a>
					</section>

				<!-- One -->


				<!-- Two -->
					<section id="one" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image"><img src="images/pic21.jpg" alt="" /></div><div class="content">
								<h2>Нетворкинг для достижения целей<br />
								</h2>
								<p>Самым главным приоритетом для нас является максимальная синергия при достижении <strong>общих целей между людьми.</strong></p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic22.jpg" alt="" /></div><div class="content">
								<h2>Поиск людей по хобби
								</h2>
								<p>В независимости от того заядлый ли вы путешественник или просто любите на досуге поиграть в шахматы, вы найдете людей которые будут мотивированны достигать новых вершин вместе с вами!</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="images/pic23.jpg" alt="" /></div><div class="content">
								<h2>Реализация миссии всей жизни</h2>
								<p>При преодолении ваших задач совместно с другими энтузиастами вы будете приближаться к вашей мечте семимильными шагами.</p>
							</div>
						</section>
					</section>

				<!-- Three -->


				<!-- CTA -->
					<section id="cta" class="wrapper style4">
						<div class="inner">
							<header>
								<h2>За дело!</h2>
								<p>Чем раньше вы начнете ваш путь, тем быстрее ваши мечты воплотяться в жизнь</p>
							</header>
							<ul class="actions stacked">
								<li><a href="#" class="button fit">Начать!</a></li>
							</ul>
						</div>
					</section>

				<!-- Footer -->
									<?php include "inc/footer.php"; ?>


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
