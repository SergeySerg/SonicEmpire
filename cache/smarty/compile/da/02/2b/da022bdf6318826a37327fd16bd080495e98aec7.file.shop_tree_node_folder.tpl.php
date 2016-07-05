<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:53
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\controllers\shop\helpers\tree\shop_tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21697577be38d3968a6-55255304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da022bdf6318826a37327fd16bd080495e98aec7' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\tree\\shop_tree_node_folder.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21697577be38d3968a6-55255304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_shop_group' => 0,
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be38d3b9b25_15251076',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be38d3b9b25_15251076')) {function content_577be38d3b9b25_15251076($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'D:\\Webserver\\domains\\sonicempire.loc\\tools\\smarty\\plugins\\modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['url_shop_group']->value, ENT_QUOTES, 'UTF-8', true);?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
