<?php /* Smarty version Smarty-3.1.19, created on 2016-12-21 19:19:18
         compiled from "D:\OpenServer\domains\sonicempire.loc\themes\sonicempire\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184155847f237a6f726-27227241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb0ee3341a78a8d2ac8ca9a7c39373d9dc0d83ce' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blockcontact\\nav.tpl',
      1 => 1482340756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184155847f237a6f726-27227241',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5847f237a832c1_68974096',
  'variables' => 
  array (
    'is_logged' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847f237a832c1_68974096')) {function content_5847f237a832c1_68974096($_smarty_tpl) {?><div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>></div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
    <div class="col-md-12 shop_phone"><img src="themes/sonicempire/img/main_phone.png" alt=""><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</div>
<?php }?>
<div class="col-md-12 shop_phone_img"><img src="themes/sonicempire/img/main_phone.png" alt=""></div><?php }} ?>
