<?php /* Smarty version Smarty-3.1.19, created on 2016-07-22 23:47:29
         compiled from "D:\Webserver\domains\sonicempire.loc\themes\sonicempire\manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65485792866187e526-20178559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ee73db8d93b46e5a9c97f9fdf6e4731d50e0b9' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\manufacturer.tpl',
      1 => 1469020328,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65485792866187e526-20178559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_579286618ef9c0_58877896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_579286618ef9c0_58877896')) {function content_579286618ef9c0_58877896($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div id="content">
		<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

        <div class="pagination-wrap">
	    <?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('no_follow'=>1,'paginationId'=>'bottom'), 0);?>

	    </div>
		</div>
	<?php } else { ?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'No products for this manufacturer.'),$_smarty_tpl);?>
</p>
	<?php }?>
        </div>
<?php }?>
<?php }} ?>
