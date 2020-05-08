<?php
//Connect to data base

$mysql = new mysqli('localhost', 'root', '', 'the_site') or die('Unable to connect');

//the user

$myid = (int) $_COOKIE['user'];
$me = mysqli_query($mysql, "SELECT * FROM `users` WHERE
`id` = '$myid' ");
$current_user = mysqli_fetch_assoc($me);
 ?>
