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
$create_table_users = $link->query("CREATE TABLE `project`.`users` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `login` TEXT NOT NULL , `pass` TEXT NOT NULL , `surname` TEXT NOT NULL , `name` TEXT NOT NULL , `patronymic` TEXT NOT NULL , `role` TEXT NOT NULL , `predmet` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");
$insert_table_users = $link->query('INSERT INTO `users` (`id`, `login`, `pass`, `surname`, `name`, `patronymic`, `role`, `predmet`) VALUES (NULL, \'admin\', \'admin\', \'\', \'\', \'\', \'admin\', \'\'), (NULL, \'prepod\', \'prepod\', \'Иванов\', \'Иван\', \'Иванович\', \'prepod\', \'mat\')');


echo "Миграции произведены!";