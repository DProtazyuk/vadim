<?php

if (!isset($_COOKIE['prepod_pass'])) {
    header("location: ../../index.php");
}

$login1 = $_COOKIE['admin_login'];
$login2 = $_COOKIE['prepod_login'];


