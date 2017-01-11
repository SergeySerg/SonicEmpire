<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 17:42:24
         compiled from "E:\Webserver\domains\sonicempire.loc\admin9377xbaxo\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277875876526019d245-22749903%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a660fa6673fa3484576e8fd6980213ee0a540bf' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\admin9377xbaxo\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1482143534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277875876526019d245-22749903',
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
  'unifunc' => 'content_587652601ba0a8_38124860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587652601ba0a8_38124860')) {function content_587652601ba0a8_38124860($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
