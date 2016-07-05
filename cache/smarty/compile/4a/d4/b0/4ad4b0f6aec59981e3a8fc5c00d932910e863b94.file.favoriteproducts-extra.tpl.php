<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:51
         compiled from "D:\Webserver\domains\sonicempire.loc\themes\default-bootstrap\modules\favoriteproducts\views\templates\hook\favoriteproducts-extra.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7430577be38bbf2d75-10511938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ad4b0f6aec59981e3a8fc5c00d932910e863b94' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\default-bootstrap\\modules\\favoriteproducts\\views\\templates\\hook\\favoriteproducts-extra.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7430577be38bbf2d75-10511938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isCustomerFavoriteProduct' => 0,
    'is_logged' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be38bc25a08_29238865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be38bc25a08_29238865')) {function content_577be38bc25a08_29238865($_smarty_tpl) {?>

<?php if (!$_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_add" class="add">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['isCustomerFavoriteProduct']->value&&$_smarty_tpl->tpl_vars['is_logged']->value) {?>
<li id="favoriteproducts_block_extra_remove">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<?php }?>

<li id="favoriteproducts_block_extra_added">
	<?php echo smartyTranslate(array('s'=>'Remove this product from my favorite\'s list. ','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li>
<li id="favoriteproducts_block_extra_removed">
	<?php echo smartyTranslate(array('s'=>'Add this product to my list of favorites.','mod'=>'favoriteproducts'),$_smarty_tpl);?>

</li><?php }} ?>
