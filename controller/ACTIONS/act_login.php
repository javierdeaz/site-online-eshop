<?php
session_start();
require_once __DIR__ . "/../MDB/mdbUsuario.php";
$home = "..";

$errMsg = '';

$email    = $_POST['email'];
$password = $_POST['password'];

$user = autenticarUsuario($email, $password);

if ($user != null) {
    if ($email == "admin") {
        $_SESSION['ID_USUARIO']     = $user->getId();
        $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
        header('Location: ../../view/adminusuarios.php');

    } else {
        $_SESSION['ID_USUARIO']     = $user->getId();
        $_SESSION['NOMBRE_USUARIO'] = $user->getNombre();
        header("Location: ../../view/shop-grid.php"); // ENVIAR AL HOMEPAGES DEL USUARIO

    }
} else {
    $errMsg             = 'usuario y/o contraseña no válido';
    $_SESSION['errMsg'] = $errMsg;
    header("Location: ../../view/login.php"); //ENVIAR AL LOGIN NUEVAMENTE
}
