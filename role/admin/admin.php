<?php

    if(!isset($_COOKIE['admin_pass'])) {
        header("location: ../../index.php");
    }

    $login1 = $_COOKIE['admin_login'];
    $login2 = $_COOKIE['prepod_login'];
    include ("../../script/connect.php");
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    <link rel="stylesheet" href="/style/index.css">
    <link rel="stylesheet" href="../../style/admin.css">
    <title>Document</title>
</head>
<body>

<div class="div_glaw_admin">
    <div class="div_min_admin">
        <div class="header_admin">
            <div class="mini_logo">
                <h3>Login in:<text> <?php echo $login1.$login2;?></text></h3>
            </div>
        </div>

        <div class="action_prepod">

            <div class="to_bd_prepod">
                <div class="new_prepod">
                    <h1 style="color: #01556a">New Prepod</h1>

                    <input type="text" placeholder="Введите login" class=" form-control input_prepod">
                    <input type="text" placeholder="Введите password" class="form-control input_prepod">
                    <input type="text" placeholder="Введите Фамилию" class="form-control input_prepod">
                    <input type="text" placeholder="Введите Имя" class="form-control input_prepod">
                    <input type="text" placeholder="Введите Отчество" class="form-control input_prepod">
                    <input type="text" placeholder="Введте Предмет" class="form-control input_prepod">

                    <button class="insert_prepod">Создать</button>
                </div>
            </div>

            <div class="select_prepod">
                <?php
                foreach ($dbh->query("SELECT * FROM users WHERE role = 'prepod'") as $row) {
                    echo "<div class=select_prepod_glaw> <div class=mini_prepod>
                    <img src=../../res/prepod_ikon.svg> <h4>Логин: <text>{$row[login]}</text>;  Пароль: <text>{$row[pass_int]}</text>;</h4>
                </div>
                <div class='mini_info'>
                    <h4>{$row[surname]} {$row[name]} {$row[patronymic]}; Предмет: <text>{$row[predmet]}</text>;</h4>
                </div>
                </div>";
                }

                ?>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../../script-js/admin.js"></script>
</body>
</html>