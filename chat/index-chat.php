<?php
require '../main/checks/user_inf.php';
?>
<!DOCTYPE HTML>

<html>
<head>
	<title>Diploma</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="../main/assets/css/main.css" />
	<link rel="stylesheet" href="http://cdn.jsdelivr.net/emojione/1.3.0/assets/css/emojione.min.css"/>
</head>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Main -->
		<div id="main">
			<div class="inner">
				<!-- Header -->
				<?php include "../main/inc/header.php"; ?>

				<section>
					<div class="contetn">
						<div class="shoutbox">
							<h1 class="your_messages">Ваши сообщения <img src='../assets/img/refresh.png'/></h1>
							<ul class="shoutbox-content"></ul>
							<div class="shoutbox-form">
								<h2 class="messages">Написать сообщение<span>×</span></h2>
								<form action="../publish.php" method="post">
									<input type="text" id="shoutbox-name" value="<?=$current_user['user_name']?>" name="name"/>
									<textarea id="shoutbox-comment" name="comment"></textarea>
									<center><input type="submit" class="button" value="Отправить"/></center>
								</form>
							</div>
						</div>
					</section>

				</div>
			</div>
			<!-- Sidebar -->
			<div id="sidebar">
				<div class="inner">
					<!-- Search -->
					<section id="search" class="alt">
						<form method="post" action="#">
							<input type="text" name="query" id="query" placeholder="Поиск" />
						</form>
					</section>
					<!-- Menu -->
					<?php include "../main/inc/footer.php"; ?>
				</div>
			</div>
		</div>
		<!-- Scripts -->
		<script src="../main/assets/js/jquery.min.js"></script>
		<script src="../main/assets/js/browser.min.js"></script>
		<script src="../main/assets/js/breakpoints.min.js"></script>
		<script src="../main/assets/js/util.js"></script>
		<script src="../main/assets/js/main.js"></script>
		<script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://cdn.jsdelivr.net/emojione/1.3.0/lib/js/emojione.min.js"></script>
        <script src="./assets/js/script.js"></script>

	</body>
	</html>
