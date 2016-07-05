<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:56:20
         compiled from "D:\Webserver\domains\sonicempire.loc\admin9377xbaxo\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31083577be6b43c9f06-76272877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70515715f34ce6755d381ce6a7ef93702d6479bd' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin9377xbaxo\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31083577be6b43c9f06-76272877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be6b43dd791_38508959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be6b43dd791_38508959')) {function content_577be6b43dd791_38508959($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
