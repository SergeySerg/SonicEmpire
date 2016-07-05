<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:50:37
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18971577be55da015d5-71157426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da397db5166baa03fd49e7aad224d0c2a1bd5af2' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1465992076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18971577be55da015d5-71157426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be55da24869_25537912',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be55da24869_25537912')) {function content_577be55da24869_25537912($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
