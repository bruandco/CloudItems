<?php /* Smarty version Smarty-3.1.11, created on 2012-07-14 07:37:09
         compiled from ".\themes\menu_haut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30319500121a5d5ff42-00212137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8040dfbe3acd6d0a7bd50a889ff42b1c06ae8de7' => 
    array (
      0 => '.\\themes\\menu_haut.tpl',
      1 => 1341651675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30319500121a5d5ff42-00212137',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_500121a5d67459_91464646',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_500121a5d67459_91464646')) {function content_500121a5d67459_91464646($_smarty_tpl) {?><div id="bloc_recherche" class="fright">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" name="keywords" id="keywords" onfocus="this.value='';">
</div>
<div class="clear"></div><?php }} ?>