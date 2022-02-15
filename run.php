<?php

$login = $_POST['post_login'];
$pass = $_POST['post_pass'];

$dbh = new PDO('mysql:host=localhost;', $login, $pass);

//удаление базы данных
$drop = $dbh->query('DROP DATABASE IF EXISTS my_db');

//Создание базы данных
$stmt = $dbh->query("CREATE DATABASE `my_db` CHARACTER SET utf8 COLLATE utf8_general_ci");

//создание таблицы Users и заполнение ее
$link = new PDO('mysql:host=localhost;dbname=my_db', 'admin', 'admin');
$create_table_users = $link->query("CREATE TABLE `users` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `login` TEXT NOT NULL , `pass` TEXT NOT NULL , `role` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB");
$insert_table_users = $link->query('INSERT INTO `users` (`id`, `login`, `pass`, `role`) VALUES (NULL, \'admin\', \'admin\', \'admin\'), (NULL, \'prepod\', \'prepod\', \'prepod\')');


echo "Миграции произведены!";