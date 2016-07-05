<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:59
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\helpers\tree\tree_node_item_radio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14976577be3938c8158-60227334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65f9c9867d3457b82d2f3a0c7a597b694072289f' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_radio.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14976577be3938c8158-60227334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be3938f6f59_62970752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be3938f6f59_62970752')) {function content_577be3938f6f59_62970752($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name">
		<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
