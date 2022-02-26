<?php

$login = $_POST['post_login'];
$pass = $_POST['post_pass'];

$dbh = new PDO('mysql:host=localhost;', $login, $pass);

//удаление базы данных
$drop = $dbh->query('DROP DATABASE IF EXISTS project');

//Создание базы данных
$stmt = $dbh->query("CREATE DATABASE `project` CHARACTER SET utf8 COLLATE utf8_general_ci");

//создание таблицы Users и заполнение ее
$link = new PDO('mysql:host=localhost;dbname=project', 'admin', 'admin');
$create_table_users = $link->query("CREATE TABLE `project`.`users` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `login` TEXT NOT NULL , `pass` TEXT NOT NULL , `pass_int` TEXT NOT NULL , `surname` TEXT  NULL , `name` TEXT  NULL , `patronymic` TEXT  NULL , `role` TEXT NOT NULL , `predmet` TEXT  NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");

$pass_admin =  password_hash('admin', PASSWORD_DEFAULT);
$pass_prepod =  password_hash('prepod', PASSWORD_DEFAULT);

$stmt = $link->prepare('INSERT INTO `users` (`id`, `login`, `pass`, `pass_int`, `surname`, `name`, `patronymic`, `role`, `predmet`) VALUES (NULL, "admin", :admin_pass, "admin", NULL , NULL, NULL , "admin", NULL ), (NULL, "prepod", :prepod_pass, "prepod", "Иванов", "Иван", "Иванович", "prepod", "mat")');
$stmt->execute(array('admin_pass' => $pass_admin, 'prepod_pass' => $pass_prepod));


echo "Миграции произведены!";
