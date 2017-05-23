<?php /* Smarty version Smarty-3.1.19, created on 2017-05-23 18:48:40
         compiled from "E:\Webserver\domains\sonicempire.loc\themes\sonicempire\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135125890a6b7043db0-42398118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ade91e04304ce0ec2028e87f6265ff56c65c1cb8' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blockcontact\\nav.tpl',
      1 => 1495553835,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135125890a6b7043db0-42398118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5890a6b70545d3_59428443',
  'variables' => 
  array (
    'is_logged' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5890a6b70545d3_59428443')) {function content_5890a6b70545d3_59428443($_smarty_tpl) {?><div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>></div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
    <div class="col-md-12 shop_phone"><img src="/themes/sonicempire/img/main_phone.png" alt=""><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</div>
<?php }?>
<div class="col-md-12 shop_phone_img"><img src="/themes/sonicempire/img/main_phone.png" alt=""></div><?php }} ?>
