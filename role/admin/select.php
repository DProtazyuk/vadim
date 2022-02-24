<?php

include ("../../script/connect.php");
$post_id = $_POST['id_prepod'];

foreach($dbh->query("SELECT * FROM users WHERE id = $post_id") as $row) {
     echo json_encode(array($row));
}




?>