<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 20:18:24
         compiled from "D:\Webserver\domains\sonicempire.loc\themes\sonicempire\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18461577bebe0c0a489-05740696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60316d119e2bca9b99a4611b13720752a0838f5f' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1467738648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18461577bebe0c0a489-05740696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577bebe0c1dd03_57714545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bebe0c1dd03_57714545')) {function content_577bebe0c1dd03_57714545($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
