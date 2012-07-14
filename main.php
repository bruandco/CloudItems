<?php     
require_once ('include/init.php');

// Securisation
$obj_auth = new authentification();
$obj_auth->verification_connexion();

require_once ( 'header.php' );
?>
<div id="main_bloc">
    <div id="main_menu_gauche">
    <?php
        $smarty->display('menu_gauche.tpl');
    ?>
    </div>

    <div id="main_centre">
    </div>
    
    <div class="clear"></div>
</div>

<?php
require_once ( 'foot.php' );
?>