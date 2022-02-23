<?php

include ("../../script/connect.php");

$post_login = $_POST['login'];
$post_pass = $_POST['pass'];
$post_surname = $_POST['surname'];
$post_name = $_POST['name'];
$post_patronymic = $_POST['patronymic'];
$post_prepmet = $_POST['prepmet'];

$pass_prepod =  password_hash($post_pass, PASSWORD_DEFAULT);

$stmt = $dbh->prepare('INSERT INTO `users` (`id`, `login`, `pass`, `pass_int`, `surname`, `name`, `patronymic`, `role`, `predmet`) VALUES (NULL, :login, :prepod_pass, :pass_z, "Иванов", "Иван", "Иванович", "prepod", "mat")');
$stmt->execute(array('login' => $post_login, 'prepod_pass' => $pass_prepod, 'pass_z' => $post_pass));