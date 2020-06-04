<?php

$con = mysqli_connect("localhost", "root", "", "nueva_tienda");
if (mysqli_connect_error()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}

date_default_timezone_set('America/Bogota');
