<?php /* Smarty version Smarty-3.1.11, created on 2012-07-15 10:42:37
         compiled from "themes\menu_gauche.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178865001219feba9c3-91780373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14308ee89dbd2a7dbe5b4e9c3720c6760e4337c5' => 
    array (
      0 => 'themes\\menu_gauche.tpl',
      1 => 1342348954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178865001219feba9c3-91780373',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5001219fed39c1_23767949',
  'variables' => 
  array (
    'keywords' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5001219fed39c1_23767949')) {function content_5001219fed39c1_23767949($_smarty_tpl) {?><div id="main_menu_gauche">
    <ul>
        <li><a href="logout.php">Deconnecter</a></li>
        <li><a href="compte.html">Mon compte</a></li>
        <li><a href="flux.html">Mes flux</a></li>
        <li>
            <form name="recherche" method="post" action="recherche.html">
                <div class="ligne_form">
                    <label for="">Recherche</label>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" onfocus="this.value='';"name="keywords" id="keywords" />
                    <div class="clear"></div>
                </div>
            </form>
        </li>
    </ul>
</div>
<?php }} ?>