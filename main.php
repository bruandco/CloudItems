<?php     
require_once ('include/init.php');

// Securisation
$obj_auth = new authentification();
$obj_auth->verification_connexion();

require_once ( 'header.php' );
?>

<?=$smarty->display('banniere.tpl');?>

<div id="main_bloc">
    <div id="main_centre">
    test
    </div>
    
    <?php
    if( ! empty( $_POST['keywords'] ) ){
        $smarty->assign('keywords',$_POST['keywords']);
    }else{
        $smarty->assign('keywords','Recherche...');    
    }
    $smarty->display('menu_gauche.tpl');
    ?>
    </div>
    <div class="clear"></div>
</div>

<?php
require_once ( 'foot.php' );
?>