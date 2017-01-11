<<<<<<< HEAD:cache/smarty/compile/d8/2d/5c/d82d5cdca421d4589cfd12c253746d4794443931.file.category.tpl.php
<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 15:53:28
         compiled from "E:\Webserver\domains\sonicempire.loc\themes\sonicempire\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12601587638d814c075-14024740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 15:27:59
         compiled from "D:\OpenServer\domains\sonicempire.loc\themes\sonicempire\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197135847f23e3698a9-75747863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 743f2adcdb250ced04b4907b68a862aeae971369:cache/smarty/compile/8e/2c/c1/8e2cc1a7b8a69c3fad4ab1ad1d67b1df4075ada4.file.category.tpl.php
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82d5cdca421d4589cfd12c253746d4794443931' => 
    array (
<<<<<<< HEAD:cache/smarty/compile/d8/2d/5c/d82d5cdca421d4589cfd12c253746d4794443931.file.category.tpl.php
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\category.tpl',
      1 => 1482143542,
=======
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\themes\\sonicempire\\category.tpl',
      1 => 1482845274,
>>>>>>> 743f2adcdb250ced04b4907b68a862aeae971369:cache/smarty/compile/8e/2c/c1/8e2cc1a7b8a69c3fad4ab1ad1d67b1df4075ada4.file.category.tpl.php
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12601587638d814c075-14024740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5847f23e3c1670_69386019',
  'variables' => 
  array (
    'category' => 0,
    'subcategories' => 0,
    'products' => 0,
    'categoryNameComplement' => 0,
    'description_short' => 0,
  ),
  'has_nocache_code' => false,
<<<<<<< HEAD:cache/smarty/compile/d8/2d/5c/d82d5cdca421d4589cfd12c253746d4794443931.file.category.tpl.php
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_587638d81c0629_00605823',
=======
>>>>>>> 743f2adcdb250ced04b4907b68a862aeae971369:cache/smarty/compile/8e/2c/c1/8e2cc1a7b8a69c3fad4ab1ad1d67b1df4075ada4.file.category.tpl.php
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587638d81c0629_00605823')) {function content_587638d81c0629_00605823($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active) {?>

		<h1 class="page-heading<?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)&&!$_smarty_tpl->tpl_vars['products']->value)||(isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value)||!isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?> product-listing<?php }?>"><span class="cat-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryNameComplement']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span></h1>
<div id="content">
		<?php if ($_smarty_tpl->tpl_vars['category']->value->description) {?>
			<div class="cat_desc">
				<?php if (Tools::strlen($_smarty_tpl->tpl_vars['category']->value->description)>350) {?>
					<div id="category_description_short"><?php echo $_smarty_tpl->tpl_vars['description_short']->value;?>
</div>
					<div id="category_description_full" class="unvisible"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
					<a href="#" class="lnk_more">Подробнее<i class="fa fa-angle-down"></i></a>
				<?php } else { ?>
					<div><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
				<?php }?>
			</div>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("./product-sort.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ("./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['products']->value), 0);?>

      <div class="pagination-wrap">
           <?php echo $_smarty_tpl->getSubTemplate ("./pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('paginationId'=>'bottom'), 0);?>

      </div>
		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
	<?php }?>
  </div>
<?php }?>
<?php }} ?>
