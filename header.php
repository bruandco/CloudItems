<?php
    if($titre_page != '' ){
        $smarty->assign("titre_page",$titre_page);
    }else{
        $smarty->assign("titre_page",$GLOBALS['titre_site']);    
    }
    $smarty->display('head.tpl');
?>