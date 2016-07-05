<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:50:37
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30648577be55daa5705-50367748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b149891e43c8edf74534ceb83aec0d5e5aef5254' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1465992076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30648577be55daa5705-50367748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be55dac0c82_59261123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be55dac0c82_59261123')) {function content_577be55dac0c82_59261123($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>
<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div>
		<?php } ?>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>
