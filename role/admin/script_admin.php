<?php

require_once('../../script/function.php');
$dbh = connect();


if(isset($_POST['action']) && $_POST['action'] == 'insert_prepod') {
    insert_prepod($dbh);
}
if (isset($_POST['action']) && $_POST['action'] == 'select_prepod'){
    select_prepod($dbh);
}
else {
    echo "aaaaaa";
}


//Добавление преподвателя
function insert_prepod($dbh) {
    $post_login = $_POST['login'];
    $post_pass = $_POST['pass'];
    $post_surname = $_POST['surname'];
    $post_name = $_POST['name'];
    $post_patronymic = $_POST['patronymic'];
    $post_predmet = $_POST['predmet'];
    
    $pass_prepod =  password_hash($post_pass, PASSWORD_DEFAULT);

    $stmt = $dbh->prepare('INSERT INTO `users` (`id`, `login`, `pass`, `pass_int`, `surname`, `name`, `patronymic`, `role`, `predmet`) VALUES (NULL, :login, :prepod_pass, :pass_z, :surname, :ima, :patronymic, "prepod" , :predmet)');
    $stmt->execute(array('login' => $post_login, 'prepod_pass' => $pass_prepod, 'pass_z' => $post_pass, 'surname' => $post_surname, 'ima' => $post_name, 'patronymic' => $post_patronymic, 'predmet' => $post_predmet));
}


//Select Преподователей
function select_prepod($dbh) { 
    $post_id = $_POST['id_prepod'];

    foreach($dbh->query("SELECT * FROM users WHERE id = $post_id") as $row) {
     echo json_encode(array($row));
    }
}


