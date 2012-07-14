<?php /* Smarty version Smarty-3.1.11, created on 2012-07-14 07:37:03
         compiled from "themes\menu_haut.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21445001219fe661b1-00784073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '216d53982825192a1433943c4739cec676ab481d' => 
    array (
      0 => 'themes\\menu_haut.tpl',
      1 => 1341651675,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21445001219fe661b1-00784073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5001219fe8e053_80358827',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5001219fe8e053_80358827')) {function content_5001219fe8e053_80358827($_smarty_tpl) {?><div id="bloc_recherche" class="fright">
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" name="keywords" id="keywords" onfocus="this.value='';">
</div>
<div class="clear"></div><?php }} ?>