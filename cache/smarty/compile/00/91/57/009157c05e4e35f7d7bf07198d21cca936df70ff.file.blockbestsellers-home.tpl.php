<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 20:18:24
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\blockbestsellers\views\templates\hook\blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14994577bebe0c5c511-16188793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '009157c05e4e35f7d7bf07198d21cca936df70ff' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\blockbestsellers\\views\\templates\\hook\\blockbestsellers-home.tpl',
      1 => 1465992076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14994577bebe0c5c511-16188793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577bebe0c73c12_65403483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bebe0c73c12_65403483')) {function content_577bebe0c73c12_65403483($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
