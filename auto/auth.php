<?php
//Connect to data base
	$mysql = new mysqli('localhost', 'root', '', 'the_site') or die('Unable to connect');
//filter the email

	 $email=filter_var(trim($_POST['email']),
	 FILTER_SANITIZE_STRING);
	 $password=filter_var(trim($_POST['password']),
	 FILTER_SANITIZE_STRING);

	 //Preparing the password
$password = md5($password.'9eir2');

	//Find a user
$result = $mysql -> query("SELECT `user_name` FROM `users` WHERE 
`email` = '$email' AND `password` = '$password'");

$user = $result->fetch_assoc();
	if(count($user) == 0){
		echo'Пользователь с таким email не зарегистрирован, либо вы ввели неверный пароль';
		exit();
	}
setcookie('user', $user['user_name'], time() + 3600, "/");

header ('Location:../auto/cabinet.php');

?>