<?php
require_once('include/init.php');
$obj_auth = new authentification();
$obj_auth->deconnexion();
redirection('index.php');
?>