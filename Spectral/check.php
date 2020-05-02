<?php

//Connect to data base
	$mysql = new mysqli('localhost', 'root', '', 'the_site') or die('Unable to connect');

//filter the user name

	$user_name = filter_var(trim($_POST['user_name']),
	FILTER_SANITIZE_STRING);

//check the data
if(isset($_POST)){
    if(empty($_POST['email'])){
        echo"<b><center><font size=4 color=red>Введите ваш E-mail</font></center></b>";
    
    } elseif(!preg_match("/^[a-zA-Z0-9_\.\-]+@([a-zA-Z0-9\-]+\.)+[a-zA-Z]{2,6}$/",$_POST['email'])){
      echo"<b><center><font size=4 color=red>некоректный E-mail, например domain@domain.ru</font></center></b>";
        }
        elseif(empty($_POST['password'])){
        echo"<b><center><font size=4 color=red>Придумайте пароль</font></center></b>";
    }
    elseif(!preg_match("/\A(\w){6,20}\Z/", $_POST['password'])){
         echo"<b><center><font size=4 color=red>Пароль должен быь от 6 до 20 символов</font></center></b>"; 
    }
    elseif(empty($_POST['demo-password'])){
        echo"<b><center><font size=4 color=red>Повторите ваш пароль</font></center></b>";
    }
     elseif($_POST['password']!=$_POST['demo-password']){
        echo"<b><center><font size=4 color=red>Введеные пароли не совпадают</font></center></b>";
	 }else{
		 $email=filter_var(trim($_POST['email']),
		 FILTER_SANITIZE_STRING);
		 $password=filter_var(trim($_POST['password']),
		 FILTER_SANITIZE_STRING);
		 
	 //Preparing the password
		
		 $password = md5($password.'9eir2');
		 
		 $query=("SELECT id FROM users WHERE email='$email'");
         /*$sql=mysql_query($query)or die (mysql_error());
           	if(mysql_num_rows($sql)>0){
                echo"<b><center><font size=4 color=red>пользователь с таким E-mail уже зарегистрирован</font></center></b>";
             }else{*/
				$mysql->query("INSERT INTO `users` (`user_name`, `email`, `password`)
				VALUES('$user_name', '$email', '$password')");
		
		 
				header ('Location:../Spectral/register-passed.php');
				//exit("<b><center><font size=4 color=green>Вы успешно зарегистрировались!</font></center></b>");
			//}
	 }
}

$mysql->close();


?>