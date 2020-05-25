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
														<?php include "../inc/footer.php"; ?>

						</div>
					</div>
				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
										<?php include "../inc/header.php"; ?>


							<!-- Content -->
								<section>

									<!-- Menu -->
								<section id="search" class="alt">
									
									<?php include "../inc/menu.php"; ?>

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
												<input type="text" name="country" id="country"
												value="<?php echo $current_user['country']; ?>" placeholder="Страна" />
												<hr class="major"/>
											<h4>Укажите Ваш город</h4>
												<input type="text" name="city" id="city"
												value="<?php echo $current_user['city']; ?>" placeholder="Город" />
				             </div>
									</div>
									<hr class="major" />
									<div class="actions special">
									 <button class="button main" name="save" type="submit">Сохранить</button>
								 </div>
								</form>

							<!--Not here
                                <hr class="major" />
                                    <h4>Укажите Ваши интересы - 10 направлений</h4>

                                    <div class="col-12">
								    <textarea name="demo-message" id="demo-message" placeholder="Что вас вдохновляет?" rows="6"></textarea>
				             		</div>

                                <hr class="major" />
                                     <h4>Укажите Ваши SMART-цели по каждому из направлений</h4>

                                    <div class="col-12">
								    <textarea name="demo-message" id="demo-message" placeholder="S-Конкретная, M-Измеримая, A-Достижимая, R-Актуальная, T-Ограниченная по времени" rows="6"></textarea>
				             		</div>

                                <hr class="major" />
									<h4>Укажите Ваш Email-адрес</h4>
                                   <form method="post" action="#">
														<div class="row gtr-uniform">
															<div class="col-6 col-12-xsmall">
															<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
															</div> </div> </form>


                                    <hr class="major" />

									<h4>Расскажите о себе</h4>
									<div class="col-12">
								    <textarea name="demo-message" id="demo-message" placeholder="Умение описать себя в 100 словах - первый шаг к осознанной жизни." rows="6"></textarea>
				             		</div>

-->
							    	</section>

						</div>
					</div>

			</div>

		<!-- Scripts -->

	</body>
</html>
