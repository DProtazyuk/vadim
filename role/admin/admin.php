<?php

    if(!isset($_COOKIE['pass_admin'])) {
        header("location: ../../index.php");
    }
    else {
        echo "yes";
    }
