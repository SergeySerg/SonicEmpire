<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:53
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\controllers\tax_rules\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13320577be38d9ad390-78871755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8f65388221da3311bbdb3c7fbca21543a86d47f' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\controllers\\tax_rules\\helpers\\list\\list_action_edit.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13320577be38d9ad390-78871755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be38d9c0c16_35419353',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be38d9c0c16_35419353')) {function content_577be38d9c0c16_35419353($_smarty_tpl) {?>
<a onclick="loadTaxRule('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
'); return false;" href="#" class="btn btn-default">
	<i class="icon-pencil"></i> 
	<?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
