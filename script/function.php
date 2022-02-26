<?php

    //Подлючение к базе данных
    function connect() {
        $dbh = new PDO('mysql:host=localhost;dbname=project', 'admin', 'admin');
        return $dbh;
    }
