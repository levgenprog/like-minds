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


							<!-- Section -->


							<!-- Footer -->

						</div>
					</div>
				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
															<?php include "../inc/header.php"; ?>


							<!-- Content -->
								<section>
									<header class="main">
										<h1>Поиск единомышленников</h1>
									</header>
                                  <!-- Menu -->
								<section id="search" class="alt">
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
									</nav>
								</section><br><br>
											<h2>Поиск единомышленников</h2>
								<section class="alt">
									<form method="post" action="search_result.php#here">
										<div class="col-12">
														<select name="demo-category" id="demo-category">
															<option value="">- Выберите категорию  -</option>
															<option value="1">Образование</option>
														</select>
	                        <hr class="minor" />
															<select name="demo-category" id="demo-category">
																<option value="">- Выберите подкатегорию  -</option>
																<option value="1">Менеджмент</option>
	                              <option value="1">Маркетинг</option>
	                              <option value="1">Программирование</option>
															</select>
	                         <hr class="minor" />
														<input type="text" name="goal" id="goal" placeholder="Цель разговора" /><br>
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

	</body>
</html>
