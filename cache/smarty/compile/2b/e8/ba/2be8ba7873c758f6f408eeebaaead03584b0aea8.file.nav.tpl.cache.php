<?php /* Smarty version Smarty-3.1.19, created on 2016-07-18 23:13:15
         compiled from "D:\Webserver\domains\sonicempire.loc\themes\sonicempire\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10185578d385bd3fce8-34842250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2be8ba7873c758f6f408eeebaaead03584b0aea8' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blockcontact\\nav.tpl',
      1 => 1468096029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10185578d385bd3fce8-34842250',
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
  'unifunc' => 'content_578d385bd5f0f7_48730221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578d385bd5f0f7_48730221')) {function content_578d385bd5f0f7_48730221($_smarty_tpl) {?>
<div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
    <div class="col-md-12 shop_phone"><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</div>
<?php }?>





<?php }} ?>
