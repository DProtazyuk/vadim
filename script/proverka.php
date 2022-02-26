<?php

    require_once('function.php');
    $dbh = connect();


unset($_COOKIE['admin_pass']);
setcookie('admin_pass', null, -1, '/');
unset($_COOKIE['admin_login']);
setcookie('admin_login', null, -1, '/');

unset($_COOKIE['prepod_pass']);
setcookie('prepod_pass', null, -1, '/');
unset($_COOKIE['prepod_login']);
setcookie('prepod_login', null, -1, '/');

$login = $_POST['input_login'];
$pass = $_POST['input_pass'];

$stmt = $dbh->prepare("SELECT * FROM users where login = ?");
$stmt->execute([ $login]);

foreach ($stmt as $row) {
    if (password_verify($pass, $row[pass])) {
        if($row[role] == 'admin') {
            setcookie("admin_pass", $row[pass], time() + 3600, "/");
            setcookie("admin_login", $row[login], time() + 3600, "/");
            header("location: ../role/admin/admin.php");
        }
        else {
            setcookie("prepod_pass", $row[pass], time() + 3600, "/");
            setcookie("prepod_login", $row[login], time() + 3600, "/");
            header("location: ../role/prepod/prepod.php");
        }
    } else {
        echo 'Пароль неправильный.';
    }}
