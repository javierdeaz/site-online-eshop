<?php

require_once __DIR__ . "/../MDB/mdbProducto.php";
$home = "..";

$errMsg = '';

$productos_activos = null;
$productos_activos = leerproducto();
