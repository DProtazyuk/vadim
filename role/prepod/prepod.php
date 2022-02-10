<?php

if(!isset($_COOKIE['pass_prepod'])) {
    header("location: ../../index.php");
}
else {
    echo "yes";
}
