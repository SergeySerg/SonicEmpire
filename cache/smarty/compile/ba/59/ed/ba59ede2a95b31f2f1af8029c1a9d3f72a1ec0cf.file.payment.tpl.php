<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 16:00:55
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132310837157c6d507c5a5f9-85027960%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba59ede2a95b31f2f1af8029c1a9d3f72a1ec0cf' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1472568735,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132310837157c6d507c5a5f9-85027960',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d507c989d5_40646921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d507c989d5_40646921')) {function content_57c6d507c989d5_40646921($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
<!-- <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>-->
			</a>
		</p>
	</div>
</div>
<?php }} ?>
