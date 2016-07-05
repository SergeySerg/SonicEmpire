<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:50:37
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\blocknewproducts\views\templates\hook\blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24013577be55dd4d2a7-43561722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '245c8ee6b5fed72ae96bbd8bb3ac95e3239ddb9e' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\blocknewproducts\\views\\templates\\hook\\blocknewproducts_home.tpl',
      1 => 1465992076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24013577be55dd4d2a7-43561722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be55dd649a3_95771992',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be55dd649a3_95771992')) {function content_577be55dd649a3_95771992($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
