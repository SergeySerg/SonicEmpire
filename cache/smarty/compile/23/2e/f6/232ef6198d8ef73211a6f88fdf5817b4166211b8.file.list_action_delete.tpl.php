<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:53
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\controllers\shop\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26949577be38d2ac261-42794085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232ef6198d8ef73211a6f88fdf5817b4166211b8' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\list\\list_action_delete.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26949577be38d2ac261-42794085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
    'id_shop' => 0,
    'shops_having_dependencies' => 0,
    'confirm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be38d306002_78062419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be38d306002_78062419')) {function content_577be38d306002_78062419($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
"
	<?php if (in_array($_smarty_tpl->tpl_vars['id_shop']->value,$_smarty_tpl->tpl_vars['shops_having_dependencies']->value)) {?>
		onclick="jAlert('<?php echo smartyTranslate(array('s'=>'You cannot delete this shop\'s (customer and/or order dependency)','js'=>1),$_smarty_tpl);?>
'); return false;"
	<?php } elseif (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?>
		onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"
	<?php }?>>
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
