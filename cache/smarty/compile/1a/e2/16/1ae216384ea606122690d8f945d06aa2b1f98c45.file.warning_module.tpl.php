<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:47
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21152577be387ec4a54-71994920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ae216384ea606122690d8f945d06aa2b1f98c45' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21152577be387ec4a54-71994920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be387ed4452_41019223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be387ed4452_41019223')) {function content_577be387ed4452_41019223($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
