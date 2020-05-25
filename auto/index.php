<?php
	$mysql = new mysqli('localhost', 'root', '', 'the_site') or die('Unable to connect');
 ?>
<!DOCTYPE HTML>
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

      <?php include "../inc/header1.php"; ?>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>DIPLOMA</h2>
							<p>СОЦИАЛЬНАЯ СЕТЬ ДЛЯ НЕТВОРКИНГА
								<br/> АМБИЦИОЗНЫХ ЛЮДЕЙ
							<br />
							</p>

							<!--The autorisation and registration pane-->

							              <form method="post" action="index.php">

															<h3>Заполните чтобы войти: </h3>
															<?php
															if (isset($_POST['auth'])) {
																$email=filter_var(trim($_POST['email']),
														 	 FILTER_SANITIZE_STRING);
														 	 $password=filter_var(trim($_POST['password']),
														 	 FILTER_SANITIZE_STRING);

														 	 //Preparing the password
														 $password = md5($password.'9eir2');

														 	//Find a user
														 $result = $mysql -> query("SELECT * FROM `users` WHERE
														 `email` = '$email' AND `password` = '$password'");

														 $user = $result->fetch_assoc();
														 	if ($user == 0){
														 		echo'<b><center><font size=4 color=red>
																Пользователь с таким email не зарегистрирован, либо Вы ввели неверный пароль</font></center></b>';
														 	}
																else {
																	setcookie('user', $user['id'], time() + 3600, "/");
																 header ('Location:../auto/cabinet.php');
															 	}
															}
															 ?>
															<div class="row gtr-uniform">
																<div class="col-6 col-12">
																	<span>Введите ваш e-mail: </span><br>
																	<input type="text" name="email"  class="form-control" id="email"
																	value="<?php echo $_POST['email'];?>" placeholder="example@ex.com" />
																	<br>
																	<span>Введите пароль: </span><br>
																	<input type="password" name="password" class="form-control" id="password"
																	 value="<?php echo $_POST['password'];?>"/>
																</div>
															</div><br>
															<div class="actions stacked">
																<button class="button fit" name="auth" type="submit">Авторизоваться</button>
															</div>
														</form><br>
							              <ul class="actions special">
															<li><a href="register.php" class="button primary">Зарегистрироваться</a></li>
														</ul><br><br>

													</div><br><br>
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
															<?php include "../inc/footer1.php"; ?>


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
