<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:53
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32175577be38d24a7d6-64127762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8ff0c2bf55e542aa854c1ea4dc0765e9cb29050' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32175577be38d24a7d6-64127762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be38d256359_13915457',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be38d256359_13915457')) {function content_577be38d256359_13915457($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
