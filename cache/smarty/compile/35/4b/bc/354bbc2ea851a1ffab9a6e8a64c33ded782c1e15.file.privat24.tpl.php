<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 16:00:55
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/modules/privat24/privat24.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2214039557c6d507ca5e46-28045085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '354bbc2ea851a1ffab9a6e8a64c33ded782c1e15' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/modules/privat24/privat24.tpl',
      1 => 1472567903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2214039557c6d507ca5e46-28045085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_template_dir' => 0,
    'privat24Url' => 0,
    'amount' => 0,
    'currency' => 0,
    'merchant' => 0,
    'order' => 0,
    'return_url' => 0,
    'server_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d507cc09f2_10789365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d507cc09f2_10789365')) {function content_57c6d507cc09f2_10789365($_smarty_tpl) {?><p class="payment_module">
	<a href="javascript:$('#privat24_form').submit();" title="<?php echo smartyTranslate(array('s'=>'Pay with privat24','mod'=>'privat24'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
privat24.gif" alt="<?php echo smartyTranslate(array('s'=>'Pay with privat24','mod'=>'privat24'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'Pay with privat24','mod'=>'privat24'),$_smarty_tpl);?>

	</a>
</p>

<form id="privat24_form" action="<?php echo $_smarty_tpl->tpl_vars['privat24Url']->value;?>
" method="POST">
	<input type="hidden" name="amt" value="<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
"/>
	<input type="hidden" name="ccy" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
" />
	<input type="hidden" name="merchant" value="<?php echo $_smarty_tpl->tpl_vars['merchant']->value;?>
" />
	<input type="hidden" name="order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" />
	<input type="hidden" name="details" value="Oplata zakaza <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" />
	<input type="hidden" name="ext_details" value="Oplata zakaza <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
" />
	<input type="hidden" name="pay_way" value="privat24" />
	<input type="hidden" name="return_url" value="<?php echo $_smarty_tpl->tpl_vars['return_url']->value;?>
" />
	<input type="hidden" name="server_url" value="<?php echo $_smarty_tpl->tpl_vars['server_url']->value;?>
" />
</form>

<?php }} ?>
