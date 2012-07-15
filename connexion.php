<?php     
require_once ('include/init.php');

$titre_page = 'Connexion';

require_once ( 'header.php' );

if( isset($_SESSION['auth_id']) && $_SESSION['auth_id'] > 0){
    redirection('compte.html');
}

// Tentative de connexion
if( isset( $_POST['btn_connexion']) ){
    $obj_auth = new authentification();
    $retour = $obj_auth->connexion($_POST['login'],$_POST['password'],$obj_connexion->link);
    if( ! $retour) {
        $obj_form = new formulaire();
        $message = $obj_form->erreur('Veuillez verifier vos identifiants',1,1);
    }else{
        redirection('compte.html');
    }
}
?>

<?php
if( !empty($message) )
    $smarty->assign("message",$message);
else
    $smarty->assign("message",'');
    
$smarty->display('splashScreen.tpl');
?>

<?php
require_once ( 'foot.php' );
?>