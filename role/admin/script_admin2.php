<?php

include ("../../script/connect.php");

$post_login = $_POST['login'];
$post_pass = $_POST['pass'];
$post_surname = $_POST['surname'];
$post_name = $_POST['name'];
$post_patronymic = $_POST['patronymic'];
$post_predmet = $_POST['predmet'];
$post_id = $_POST['id_prepod'];

$pass_prepod =  password_hash($post_pass, PASSWORD_DEFAULT);

$sql = "SELECT * FROM users WHERE role = 'prepod'";
$res = $dbh->query($sql);
$count = $res->rowCount();

$stmt = $dbh->prepare('UPDATE users SET login=:login, pass=:prepod_pass, pass_int=:pass_z, surname=:surname, name=:ima, patronymic=:patronymic, role="prepod", predmet=:predmet WHERE id = :post_id');
$stmt->execute(array('login' => $post_login, 'prepod_pass' => $pass_prepod, 'pass_z' => $post_pass, 'surname' => $post_surname, 'ima' => $post_name, 'patronymic' => $post_patronymic, 'predmet' => $post_predmet, 'post_id' => $post_id));