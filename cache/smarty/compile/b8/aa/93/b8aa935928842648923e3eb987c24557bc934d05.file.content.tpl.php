<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:56:03
         compiled from "D:\Webserver\domains\sonicempire.loc\admin9377xbaxo\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1544577be6a356c0a0-16811218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8aa935928842648923e3eb987c24557bc934d05' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin9377xbaxo\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1544577be6a356c0a0-16811218',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be6a357f929_57068547',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be6a357f929_57068547')) {function content_577be6a357f929_57068547($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
