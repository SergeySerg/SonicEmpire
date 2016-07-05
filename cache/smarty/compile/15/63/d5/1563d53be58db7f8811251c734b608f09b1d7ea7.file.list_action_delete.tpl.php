<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:57
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5926577be3912b8c37-32047287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1563d53be58db7f8811251c734b608f09b1d7ea7' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5926577be3912b8c37-32047287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be3912f35c5_61145426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be3912f35c5_61145426')) {function content_577be3912f35c5_61145426($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
