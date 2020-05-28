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

									<!-- Menu -->
								<section id="search" class="alt">

								<?php include '../inc/menu.php'; ?>

									<header class="main">
										<h1 id="here">Редактирование профиля</h1>
									</header>
									<?php
										require 'checks/load_photo.php';
									 ?>
									<h3 align="right">Редактировать фото вашего профиля</h3>
										<form align="right" action="#here" method="post" enctype="multipart/form-data">
												<input class="button" type="file" name="uploadfile"><br><br>
												<button class="button main" name="upload" type="submit">Сохранить</button>
										</form>


                  <span id="img" class="image right profile"> <img src="images/profile_photos/<?php echo $current_user['photo']; ?>" alt="" > </span>

									<hr class="major"/>
									<form method="get" action="edit-pro.php#img">
										<?php
											if (isset($_GET['save'])) {
												$name = filter_var(trim($_GET['name']),
												FILTER_SANITIZE_STRING);
												$gender = filter_var(trim($_GET['gender']),
												FILTER_SANITIZE_STRING);
												$country = filter_var(trim($_GET['country']),
												FILTER_SANITIZE_STRING);
												$city = filter_var(trim($_GET['city']),
												FILTER_SANITIZE_STRING);
												if ($current_user['id'] == $myid) {
													$mysql -> query("UPDATE `users`
														SET `user_name` = '$name', `gender` = '$gender', `country` = '$country',
														`city` = '$city' WHERE `id` = '{$current_user['id']}'");
													echo "<b><center><font size=4 color=red>Данные сохранены успешно</font></center></b>";
												}
												else {
													echo "<b><center><font size=4 color=red>Что-то пошло не так</font></center></b>";
												}
											}
										 ?>
								  <div class="row gtr-uniform">
										<div class="col-6 col-12-xsmall">
											<h4>Ваше имя: </h4>
												<input type="text" name="name" id="name"
												 placeholder="<?php echo $current_user['user_name']; ?>" />
												<hr class="major"/>
											<h4>Ваш пол</h4>
											<p>(Для обращения к Вам. Используется в поиске по желанию)</p>
												<div class="col-12">
														<select name="gender" id="gender">
															<option value="">- Ваш пол -</option>
															<option value="1">Мужской</option>
															<option value="2">Женский</option>
														</select>
												</div>
												<hr class="major"/>
											<h4>Укажите Вашу страну</h4>
												<input type="text" list="country-list" name="country" id="country"
												value="<?php echo $current_user['country']; ?>" placeholder="Страна" />

												<!--Make a country list editable-->
												<?php
														$country_all_q = mysqli_query($mysql, "SELECT DISTINCT `country` FROM `users`");
														echo "<datalist id='country-list'>";
														while($object = mysqli_fetch_object($country_all_q)){
																echo "<option value = '$object->country' > $object->country </option>";
														}
														echo "</datalist>";
												 ?>
												<hr class="major"/>
											<h4>Укажите Ваш город</h4>
												<input type="text" list="city-list" name="city" id="city"
												value="<?php echo $current_user['city']; ?>" placeholder="Город" />

												<!--Make a city list editable-->
												<?php
														$city_all_q = mysqli_query($mysql, "SELECT DISTINCT `city` FROM `users`");
														echo "<datalist id='city-list'>";
														while($object_city = mysqli_fetch_object($city_all_q)){
																echo "<option value = '$object_city->city' > $object_city->city </option>";
														}
														echo "</datalist>";
												 ?>
				             </div>
									</div>
									<hr class="major" />
									<div class="actions special">
									 <button class="button main" name="save" type="submit">Сохранить</button>
								 </div>
								</form>

								<!--the new forms start here-->

													<form>
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
                                <hr class="major" />
                                    <h4>Укажите Ваши интересы - 10 направлений</h4>
																		<?php
																		 $sql_cat = mysqli_query($mysql, "SELECT DISTINCT `name` FROM `spheres` ORDER BY `id`");
																		 echo "<select name='demo-category' id='demo-category'>";
																			 echo "<option value=''>- Выберите категорию  -</option>";
																				 while ($cat = mysqli_fetch_object($sql_cat)) {
																					 echo "<option value='$cat->name'> $cat->name </option>";
																				 }
																		 echo "</select>";
																		?>

                                <hr class="major" />
                                     <h4>Укажите Ваши SMART-цели по каждому из направлений</h4>


								    <textarea name="demo-message" id="demo-message" placeholder="S-Конкретная, M-Измеримая, A-Достижимая, R-Актуальная, T-Ограниченная по времени" rows="6"></textarea>




															</div>
														</div>
														<hr class="major" />
														<button class="button main" name="save" type="submit">Сохранить</button>
											</form>
							    	</section>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
