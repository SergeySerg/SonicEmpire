<?php /* Smarty version Smarty-3.1.19, created on 2016-11-18 21:28:17
         compiled from "D:\OpenServer\domains\sonicempire.loc\themes\sonicempire\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31971582f565170a6d2-56922355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb0ee3341a78a8d2ac8ca9a7c39373d9dc0d83ce' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blockcontact\\nav.tpl',
      1 => 1479314664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31971582f565170a6d2-56922355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_582f565171b318_05658811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582f565171b318_05658811')) {function content_582f565171b318_05658811($_smarty_tpl) {?><div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>></div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
    <div class="col-md-12 shop_phone"><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</div>
<?php }?><?php }} ?>
