<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 21:26:53
         compiled from "D:\Webserver\domains\sonicempire.loc\admin9377xbaxo\themes\default\template\helpers\tree\tree_toolbar_link.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11232577bfbed855176-95853867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '916c87b1c911830a5ded0dcfa98f36cf4497a305' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin9377xbaxo\\themes\\default\\template\\helpers\\tree\\tree_toolbar_link.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11232577bfbed855176-95853867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'action' => 0,
    'id' => 0,
    'icon_class' => 0,
    'label' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577bfbed887e00_71730852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bfbed887e00_71730852')) {function content_577bfbed887e00_71730852($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
"<?php if (isset($_smarty_tpl->tpl_vars['action']->value)) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?> id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?> class="btn btn-default">
	<?php if (isset($_smarty_tpl->tpl_vars['icon_class']->value)) {?><i class="<?php echo $_smarty_tpl->tpl_vars['icon_class']->value;?>
"></i><?php }?>
	<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>

</a><?php }} ?>
