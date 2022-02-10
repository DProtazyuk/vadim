<?php

    include ('connect.php');

unset($_COOKIE['pass_admin']);
setcookie('pass_admin', null, -1, '/');

unset($_COOKIE['pass_prepod']);
setcookie('pass_prepod', null, -1, '/');

    $login = $_POST['input_login'];
    $pass = $_POST['input_pass'];

$stmt = $dbh->prepare("SELECT * FROM users where login = ?");
$stmt->execute([ $login]);

foreach ($stmt as $row) {
    if (password_verify($pass, $row[pass])) {
        if($row[role] == 'admin') {
            setcookie("pass_admin", $row[pass], time() - 3600, "/");
        }
        else {
            setcookie("pass_prepod", $row[pass], time() - 3600, "/");
        }
    } else {
        echo 'Пароль неправильный.';
    }}
