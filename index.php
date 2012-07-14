<?php     
require_once('include/init.php');

if( isset($_SESSION['auth_id']) && $_SESSION['auth_id'] > 0){
    redirection('main.php');
}else{
    redirection('connexion.php');
}