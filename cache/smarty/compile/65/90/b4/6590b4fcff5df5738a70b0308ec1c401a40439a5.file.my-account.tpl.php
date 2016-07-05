<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:52
         compiled from "D:\Webserver\domains\sonicempire.loc\themes\default-bootstrap\modules\mailalerts\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19157577be38c36f400-60749118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6590b4fcff5df5738a70b0308ec1c401a40439a5' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\default-bootstrap\\modules\\mailalerts\\views\\templates\\hook\\my-account.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19157577be38c36f400-60749118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be38c396511_61656666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be38c396511_61656666')) {function content_577be38c396511_61656666($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
