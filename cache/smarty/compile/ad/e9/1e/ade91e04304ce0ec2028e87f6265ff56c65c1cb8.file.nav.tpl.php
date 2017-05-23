<?php /* Smarty version Smarty-3.1.19, created on 2017-05-24 00:10:09
         compiled from "E:\Webserver\domains\sonicempire.loc\themes\sonicempire\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222325924a531a97e02-66672083%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '222325924a531a97e02-66672083',
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
  'unifunc' => 'content_5924a531aac126_93835181',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924a531aac126_93835181')) {function content_5924a531aac126_93835181($_smarty_tpl) {?><div id="contact-link" <?php if (isset($_smarty_tpl->tpl_vars['is_logged']->value)&&$_smarty_tpl->tpl_vars['is_logged']->value) {?> class="is_logged"<?php }?>></div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
    <div class="col-md-12 shop_phone"><img src="/themes/sonicempire/img/main_phone.png" alt=""><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</div>
<?php }?>
<div class="col-md-12 shop_phone_img"><img src="/themes/sonicempire/img/main_phone.png" alt=""></div><?php }} ?>
