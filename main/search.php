<?php
require 'checks/user_inf.php';
?>
<?php
		if ($_GET['sel']) {
		$sel = (int) $_GET['sel'];

		$sql_sub = mysqli_query($mysql, "SELECT sub.name
								FROM `subspheres` sub
								JOIN `spheres` sph on sph.id = sub.sphere_id
								WHERE `sphere_id` = '$sel'");
} ?>
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
										<li class="icon solid fa-phone">(747) 259 79 62</li>
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
											<h2>Поиск единомышленников</h2>
								<section class="alt">
									<p>Здесь вы можете указать критерии, по которым вы будете искать ваших единомышленников.<br>
									Очень рекомендуется выбирать те же категории и приоритеты, которые вы выбрали сами, чтобы собеседник видел, что для вас это также важно.</p>
									<form method="post" action="search_result.php#here">
										<div class="col-12">

											<!--Take the categories from database-->
											<h4>* В каком направлении вы хотите найти единомышленника?</h4>
											<?php
												$sql_cat = mysqli_query($mysql, "SELECT DISTINCT `name` FROM `spheres` ORDER BY `id`");
												echo "<select name='category' id='category'
												onchange='var a = this.selectedIndex; getSelected(a);'>";

												//check for matching between cats to keep it filled after the page is reloaded

												if ($sel != 0) {
													$sop = mysqli_fetch_object(mysqli_query($mysql, "SELECT `name` FROM `spheres` WHERE `id` = '$sel'"));
													echo "<option value='$sop->name'> $sop->name </option>";
												}else {
													echo "<option value=''>- Выберите категорию  -</option>";
												}
														while ($cat = mysqli_fetch_object($sql_cat)) {
															echo "<option value='$cat->name'> $cat->name </option>";
														}
												echo "</select>";
											 ?>
	                        <hr class="minor" />

													<h4>* Насколько приоритетно должно быть это направление для вашего единомышленника?</h4>
														<select name="priority" id="priority">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
														</select>
													<hr class="minor" />

											<!--Take the subcategories from data base-->
														<h4>Вы можете сконцентрировать поиск, выбрав подкатегорию</h4>
														<?php
														echo "<select name='demo-category' id='demo-category'>";
															echo "<option value=''>- Выберите подкатегорию  -</option>";
																while ($sub_cat = mysqli_fetch_object($sql_sub)) {
																	echo "<option value='$sub_cat->name'> $sub_cat->name </option>";
															}
														echo "</select>";
														 ?>
	                         <hr class="minor" />

														<input type="checkbox" name="mycity" value="yes" checked>
																<label for="mycity">Искать в моем городе</label> <br><br>
														<button class="button main" name="search" type="submit">Поиск</button>
											</div>
									</form>
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
