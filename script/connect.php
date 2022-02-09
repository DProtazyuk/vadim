<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=project', 'admin', 'admin');
    foreach($dbh->query('SELECT * from FOO') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}