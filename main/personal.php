<?php
require 'checks/user_inf.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Diploma</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Поиск" />
									</form>
								</section>


							<!-- Section -->
														<?php include "D:/Xampp/htdocs/heir/sup-proggress.kz/inc/footer.php"; ?>


							<!-- Section -->
								
							<!-- Footer -->
							
						</div>
					</div>
				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								
                            <?php include "D:/Xampp/htdocs/heir/sup-proggress.kz/inc/header.php"; ?>

							<!-- Menu -->
								
                            <nav id="menu">
									<header class="major">
										<h2>Меню</h2>
									</header>
									<ul>
										<li><a href="personal.php">Личный кабинет</a></li>
										<li><a href="../chat/index.php">Мессенджер</a></li>
										<li><a href="search.php">Поиск Единомышленников</a></li>
										<li><a href="../auto/exit.php">Выход</a></li>
                  </ul>
								</nav><br><br>

								<!-- Content -->

									<header class="main">
										<h1>Личный кабинет
											<?php
											//The treatment
											if ($current_user['gender'] == 2) {
												echo "госпожи";
											}else {
												echo "господина";
											}
										 ?> <?=$current_user['user_name']?></h1>
									</header>
                  <h3 class="bu" align="right">Фото вашего профиля</h3>
                  <style>
										img {
										border: 3px solid #800000;
										}
									</style>
                  <span class="image right"> <img src="images/Napoleon-1.jpg" alt="" > </span>

									<hr class="major" />
								    <h4 class="user_about">Ваше имя: &nbsp;<b><?=$current_user['user_name']?></b></h4>
                  <hr class="major" />
                    <h4 class="user_about">Вы живете в стране: &nbsp;<b><?=$current_user['country']?></b> </h4>
									<hr class="major" />
										<h4 class="user_about">Ваш город: &nbsp;<b><?=$current_user['city']?></b></h4>
                  <hr class="major" />

									<div class="col-6 col-12-small">
										<ul class="actions stacked">
											<h4>Что-то не так?</h4>
											<li><a href="edit-pro.php" class="button main" align="left">Редактировать мой профиль</a></li>
										</ul>
									</div>

<!--Use not here
                  <h4>Ваши интересы - 10 направлений</h4>

                  <hr class="major" />

                  <h4>Ваши SMART-цели по каждому из направлений</h4>

                  <hr class="major" />

<h4>Ваш Email-адрес</h4>
                <hr class="major" />
<h4>Информация о себе</h4>
-->


				<!-- Sidebar
					<div id="sidebar">
						<div class="inner">

							<!-- Search
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Поиск" />
									</form>
									</section>-->



							<!-- Section
								<section>
									<header class="major">
										<h2>Наши статьи</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="SMART.html" class="image"><img src="images/5.jpg" alt="" /></a>
											<p>Как сформировать SMART-Цель</p>
										</article>
										<article>
											<a href="ЦЗД.html" class="image"><img src="images/6.jpg" alt="" /></a>
											<p>Система Цели-Задачи-Действия</p>
										</article>
										<article>
											<a href="matrix.html" class="image"><img src="images/88.jpg" alt="" /></a>
											<p>Матрица Эйзенхауэра</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="SMART.html" class="button">Читать</a></li>
									</ul>
								</section>-->

							<!-- Section -->


							<!-- Footer
								<footer id="footer">
									<p class="copyright">&copy; Connection_in_isolation. All rights reserved. </p>
									
								</footer>-->

						</div>
					</div>

			</div>

		<!-- Scripts -->
			

	</body>
</html>
