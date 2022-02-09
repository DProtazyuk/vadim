<?php

    include ('connect.php');

    $login = $_POST['input_login'];
    $pass = $_POST['input_pass'];

$sth = $dbh->prepare("SELECT * FROM `users` WHERE `id` = ?");
$sth->execute(array('1'));
$array = $sth->fetch(PDO::FETCH_ASSOC);
print_r($array);