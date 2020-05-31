<?php
session_start();
require_once "vendor/autoload.php";
$gClient = new Google_client();
$gClient->setClientId("57609521032-od9tisv0u53188f4thhebfoscvq6k8nd.apps.googleusercontent.com");
$gClient->setClientSecret("CVhOV4KzxZkOANpias2KB2Pi");
$gClient->setApplicationName("Eshop");
$gClient->setRedirectUri("http://localhost/sites/site-online-eshop/view/GoogleApi/g-back.php");
$gClient->setScopes("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
