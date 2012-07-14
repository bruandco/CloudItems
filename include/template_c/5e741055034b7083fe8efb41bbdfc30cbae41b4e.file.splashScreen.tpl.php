<?php /* Smarty version Smarty-3.1.11, created on 2012-07-14 20:12:12
         compiled from "themes\splashScreen.tpl" */ ?>
<?php /*%%SmartyHeaderCode:982850012352e49b85-56703551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e741055034b7083fe8efb41bbdfc30cbae41b4e' => 
    array (
      0 => 'themes\\splashScreen.tpl',
      1 => 1342296731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '982850012352e49b85-56703551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50012352e4a6b7_82913026',
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50012352e4a6b7_82913026')) {function content_50012352e4a6b7_82913026($_smarty_tpl) {?><script type="text/javascript" src="include/javascript/conf/formulaire_connexion.js"></script>

<div id="splashScreen">
    <img src="image/logo.png" alt="" title="" class="logo"/>
    
    <form name="connexion"  id="connexion" method="post" action="connexion.php" class="verification_formulaire">
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

        <?php }?>
        
        <div id="message_erreur" style="display:none;">Tous les champs ne sont pas remplis ! </div>
        
        <div class="bloc_champ_formulaire">
            <div class="ligne_form">
                <label for="login">Login</label>
                <input type="text" value="" name="login" id="login" class="obligatoire"/>
                <div class="message_erreur_champ" style="display:none;">Champs obligatoire</div>
                <div class="clear"></div>
            </div>
            
            <div class="ligne_form">
                <label for="password">Password</label>
                <input type="password" value="" name="password" id="password" class="obligatoire"/>
                <div class="message_erreur_champ" style="display:none;" >Champs obligatoire</div>
                <div class="clear"></div>
            </div>
            
            <div class="clear"></div>
        </div>
        
        <div class="bloc_bouton_formulaire">
            <input type="submit" value="Connexion" name="btn_connexion" id="btn_connexion" class="bouton_action"/>
        </div>
        
        <div class="clear"></div>
    </form>
</div><?php }} ?>