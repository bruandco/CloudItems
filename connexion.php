<?php     
require_once ('include/init.php');
require_once ( 'header.php' );

if( isset($_SESSION['auth_id']) && $_SESSION['auth_id'] > 0){
    redirection('main.php');
}

// Tentative de connexion
if( isset( $_POST['btn_connexion']) ){
    echo 'ok';
    $obj_auth = new authentification();
    $retour = $obj_auth->connexion($_POST['login'],$_POST['password'],$obj_connexion->link);
    if( ! $retour) {
        $obj_form = new formulaire();
        $message = $obj_form->erreur('Veuillez verifier vos identifiants',1,1);
    }else{
        redirection('main.php');
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