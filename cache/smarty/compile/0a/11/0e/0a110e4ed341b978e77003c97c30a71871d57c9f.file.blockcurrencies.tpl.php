<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:48
         compiled from "D:\Webserver\domains\sonicempire.loc\themes\default-bootstrap\modules\blockcurrencies\blockcurrencies.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27081577be388ac9479-65290162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a110e4ed341b978e77003c97c30a71871d57c9f' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\default-bootstrap\\modules\\blockcurrencies\\blockcurrencies.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27081577be388ac9479-65290162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'request_uri' => 0,
    'cookie' => 0,
    'f_currency' => 0,
    'currency_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be388b42616_52279081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be388b42616_52279081')) {function content_577be388b42616_52279081($_smarty_tpl) {?>
<!-- Block currencies module -->
<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1) {?>
	<div id="currencies-block-top">
		<form id="setCurrency" action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
" method="post">
			<div class="current">
				<input type="hidden" name="id_currency" id="id_currency" value=""/>
				<input type="hidden" name="SubmitCurrency" value="" />
				<span class="cur-label"><?php echo smartyTranslate(array('s'=>'Currency','mod'=>'blockcurrencies'),$_smarty_tpl);?>
 :</span>
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?><strong><?php echo $_smarty_tpl->tpl_vars['f_currency']->value['iso_code'];?>
</strong><?php }?>
				<?php } ?>
			</div>
			<ul id="first-currencies" class="currencies_ul toogle_content">
				<?php  $_smarty_tpl->tpl_vars['f_currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f_currency']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f_currency']->key => $_smarty_tpl->tpl_vars['f_currency']->value) {
$_smarty_tpl->tpl_vars['f_currency']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['f_currency']->key;
?>
					<?php if (strpos($_smarty_tpl->tpl_vars['f_currency']->value['name'],('(').($_smarty_tpl->tpl_vars['f_currency']->value['iso_code']).(')'))===false) {?>
						<?php ob_start();?><?php echo smartyTranslate(array('s'=>'%s (%s)','sprintf'=>array($_smarty_tpl->tpl_vars['f_currency']->value['name'],$_smarty_tpl->tpl_vars['f_currency']->value['iso_code'])),$_smarty_tpl);?>
<?php $_tmp15=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_tmp15, null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars["currency_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['f_currency']->value['name'], null, 0);?>
					<?php }?>
					<li <?php if ($_smarty_tpl->tpl_vars['cookie']->value->id_currency==$_smarty_tpl->tpl_vars['f_currency']->value['id_currency']) {?>class="selected"<?php }?>>
						<a href="javascript:setCurrency(<?php echo $_smarty_tpl->tpl_vars['f_currency']->value['id_currency'];?>
);" rel="nofollow" title="<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>
">
							<?php echo $_smarty_tpl->tpl_vars['currency_name']->value;?>

						</a>
					</li>
				<?php } ?>
			</ul>
		</form>
	</div>
<?php }?>
<!-- /Block currencies module -->
<?php }} ?>
