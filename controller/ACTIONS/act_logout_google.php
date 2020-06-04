<?php
require_once "../../view/GoogleApi/config.php";
unset($_SESSION['access_token']);
$gClient->revokeToken();
session_destroy();
header('Location: ../../view/index.php');
exit();
