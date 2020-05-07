<?php
	$mysql = new mysqli('localhost', 'root', '', 'the_site') or die('Unable to connect');
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Регистрация</title>
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
						<h1><a href="index.html">Регистрация</a></h1>
					</header>

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>DIPLOMA: Регистрация</h2>
							<p>СОЦИАЛЬНАЯ СЕТЬ ДЛЯ НЕТВОРКИНГА
							<br/> АМБИЦИОЗНЫХ ЛЮДЕЙ
							<br/>
							</p>

              <form method="post" action="register.php">

								<h3>Для регистрации, заполните следующие поля:
									<?php
										if (isset($_POST['register'])) {
											$errors = array();

													//checking for errors

												if(empty($_POST['email'])){
													 $errors[] = '<b><center><font size=4 color=red>Введите ваш E-mail</font></center></b>';
												}
												elseif(!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/",$_POST['email'])){
													$errors[] = '<b><center><font size=4 color=red>некоректный E-mail, например domain@domain.ru</font></center></b>';
												}
												elseif(empty($_POST['password'])){
									        $errors[] = "<b><center><font size=4 color=red>Придумайте пароль</font></center></b>";
								    		}
												elseif(empty($_POST['user_name'])){
									        $errors[] = "<b><center><font size=4 color=red>Введите Ваше имя</font></center></b>";
								    		}
												elseif(!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])){
										         $errors[] = "<b><center><font size=4 color=red>Пароль должен быть от 6 до 20 символов</font></center></b>";
												}
												elseif(empty($_POST['demo-password'])){
										        $errors[] = "<b><center><font size=4 color=red>Повторите ваш пароль</font></center></b>";
										    }
												elseif($_POST['password']!=$_POST['demo-password']){
									         $errors[] = "<b><center><font size=4 color=red>Введеные пароли не совпадают</font></center></b>";
												}
												else {
													$email=filter_var(trim($_POST['email']),
													FILTER_SANITIZE_STRING);
													$query = mysqli_query($mysql, "SELECT `id` FROM `users` WHERE `email`='$email'");
													$query = mysqli_fetch_assoc($query);
													if ($query) {
														$errors[] = "<b><center><font size=4 color=red>пользователь с таким E-mail уже зарегистрирован</font></center></b>";
													}
												}


											if (empty($errors)) {
												//Vars
												$user_name = filter_var(trim($_POST['user_name']),
												FILTER_SANITIZE_STRING);
												$password=filter_var(trim($_POST['password']),
												FILTER_SANITIZE_STRING);
												//Preparing the password
										 		 $password = md5($password.'9eir2');
												 //insert in data base
												 $mysql->query("INSERT INTO `users` (`user_name`, `email`, `password`)
												 VALUES('$user_name', '$email', '$password')");
												 $result = $mysql -> query("SELECT * FROM `users` WHERE
												 `email` = '$email'");
												 $user = $result->fetch_assoc();

												 	setcookie('user', $user['id'], time() + 3600, "/");

												 header ('Location:../Spectral/register-passed.php');

											}else {
												echo $errors['0'];
											}
										}
									 ?> </h3>
							<div class="row gtr-uniform">
								<div class="col-6 col-12">
									<span>Ваше имя: </span><br>
				            		<input type="text" name="user_name"  class="form-control" id="user_name"
												value="<?php echo $_POST['user_name'];?>" placeholder="Иванов Иван" />
									<br>
									<span>Введите ваш E-mail: </span><br>
												<input type="text" name="email" id="email" class="form-control"
												value="<?php echo $_POST['email'];?>" placeholder="examle@ex.com" />
									<br>
									<span>Придумайте пароль</span><br>
				            		<input type="password" name="password" class="form-control" id="password"
												value="<?php echo $_POST['password'];?>"/>
									<br>
									<span>Повторите пароль</span><br>
				            		<input type="password" name="demo-password" class="form-control" id="demo-password"
												 value="<?php echo $_POST['demo-password'];?>"/>
				            	</div>
							</div> <br>
								<div class="actions special">
									<button class="button primary" name="register" type="submit">Зарегистрироваться</button>
								</div>
							</form>


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
