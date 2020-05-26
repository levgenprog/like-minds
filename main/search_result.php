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
								</section>

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Связаться с нами</h2>
									</header>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="#">migourgoals@gmail.com</a></li>
										<li class="icon solid fa-phone">+ (747) 259 79 62</li>
										<li class="icon solid fa-home">Almaty<br />
										</li>
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Connection_in_isolation. All rights reserved. </p>
								</footer>

						</div>
					</div>
				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo"><strong>СОЦИАЛЬНАЯ СЕТЬ ДЛЯ НЕТВОРКИНГА</strong> АМБИЦИОЗНЫХ ЛЮДЕЙ</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Поиск единомышленников</h1>
									</header>
                                  <!-- Menu -->
								<section id="search" class="alt">
									<?php include '../inc/menu.php'; ?>
								</section><br><br>
                <ul class="actions">
                    <li><a href="search.php" class="button big">Вернуться <strong>в настройки поиска</strong></a></li>
                </ul>
											<h2 id="here">Результаты поиска</h2>
								<section class="alt">
										<?php
											if (isset($_POST['search'])) {
												if (isset($_POST['mycity'])) {
														$result_q = mysqli_query($mysql, "SELECT * FROM `users`
														WHERE `country` = '{$current_user['country']}' AND
														`city` = '{$current_user['city']}' AND
														`id` <> '{$current_user['id']}'");
												}
												else {
													echo "It doesn't work";
												}
											}
										while ($result = mysqli_fetch_assoc($result_q)) {
											?>
											<div class="result">
												<solid><b><?php echo $result['user_name'] . ' ' . $result['country'] . ' ' . ' ' . $result['city']; ?></b></solid><br><br>
												<img class="search_picture" src="images/profile_photos/<?php echo $result['photo']; ?>" alt="" >
                        <button type="button" class="button main"> <a href="../chat/index-chat.php">Перейти к диалогу</a> </button>
											</div><br>
									<?php
										}
									 ?>
									</div>
							</section>
          </section>
      </div>


				<!-- Sidebar -->


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
