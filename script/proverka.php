<?php

    include ('connect.php');

    $login = $_POST['input_login'];
    $pass = $_POST['input_pass'];

$stmt = $dbh->prepare("SELECT * FROM users where login = ?");
$stmt->execute([ $login]);

foreach ($stmt as $row) {
    if (password_verify($pass, $row[pass])) {
        echo 'Пароль правильный!';
    } else {
        echo 'Пароль неправильный.';
    }}
