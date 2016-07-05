<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 21:26:54
         compiled from "D:\Webserver\domains\sonicempire.loc\admin9377xbaxo\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24155577bfbee1e0e06-60495506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afb15110698bfd6d5e3a9d55ae2974590d72fc6c' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin9377xbaxo\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24155577bfbee1e0e06-60495506',
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
  'unifunc' => 'content_577bfbee1ec983_93395644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bfbee1ec983_93395644')) {function content_577bfbee1ec983_93395644($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
