<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 15:41:00
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151452372957c6d05cf40b84-41605695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c79706321800320b13105756a1641d4a6c2192fc' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/themes/sonicempire/modules/blockcontact/nav.tpl',
      1 => 1472568521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151452372957c6d05cf40b84-41605695',
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
  'unifunc' => 'content_57c6d05d00adb7_31802287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d05d00adb7_31802287')) {function content_57c6d05d00adb7_31802287($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
    <div class="col-md-12 shop_phone"><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</div>
<?php }?>





<?php }} ?>
