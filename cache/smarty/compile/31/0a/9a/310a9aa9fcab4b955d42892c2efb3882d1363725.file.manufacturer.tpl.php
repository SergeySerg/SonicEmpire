<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 15:41:00
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47259623657c6d05c6e4ac8-70139927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '310a9aa9fcab4b955d42892c2efb3882d1363725' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/manufacturer.tpl',
      1 => 1472568385,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47259623657c6d05c6e4ac8-70139927',
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
  'unifunc' => 'content_57c6d05c6fdd06_37341747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d05c6fdd06_37341747')) {function content_57c6d05c6fdd06_37341747($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php if (!isset($_smarty_tpl->tpl_vars['errors']->value)||!sizeof($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
        <div id="content">
        <?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
