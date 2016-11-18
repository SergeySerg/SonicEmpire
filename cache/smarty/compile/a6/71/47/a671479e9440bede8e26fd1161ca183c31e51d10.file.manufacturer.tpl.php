<?php /* Smarty version Smarty-3.1.19, created on 2016-11-18 21:28:51
         compiled from "D:\OpenServer\domains\sonicempire.loc\themes\sonicempire\manufacturer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11765582f56730211f5-05028682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a671479e9440bede8e26fd1161ca183c31e51d10' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\themes\\sonicempire\\manufacturer.tpl',
      1 => 1479314634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11765582f56730211f5-05028682',
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
  'unifunc' => 'content_582f5673088931_63169147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f5673088931_63169147')) {function content_582f5673088931_63169147($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
