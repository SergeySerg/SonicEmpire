<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:57
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19203577be39145eaa0-65067835%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5892ae7a1ece89ea5634d3d6e2ec83c3220043' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19203577be39145eaa0-65067835',
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
  'unifunc' => 'content_577be3914761a1_80833474',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be3914761a1_80833474')) {function content_577be3914761a1_80833474($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
