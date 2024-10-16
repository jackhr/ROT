<?php

include_once 'env.php';

if (isset($bypass_db) && $bypass_db !== true) {
    $con = mysqli_connect($hostname, $username, $password, $database);
    
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
}

