<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:47
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\controllers\logs\employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5297577be38711c594-15921037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '513b2bd0f5b981ae35d9c01d102bc0f002e71151' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\controllers\\logs\\employee_field.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5297577be38711c594-15921037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be387128124_48425009',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be387128124_48425009')) {function content_577be387128124_48425009($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
