<?php /* Smarty version Smarty-3.1.19, created on 2016-09-01 11:43:54
         compiled from "D:\OpenServer\domains\sonicempire.loc\themes\sonicempire\errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2105057c7ea4ab55b55-89262300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a89923100967f61c8058fc529a0518554d6d9b5d' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\themes\\sonicempire\\errors.tpl',
      1 => 1472717905,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2105057c7ea4ab55b55-89262300',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
    'request_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c7ea4ae5e174_46755830',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c7ea4ae5e174_46755830')) {function content_57c7ea4ae5e174_46755830($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&$_smarty_tpl->tpl_vars['errors']->value) {?>
	<div class="alert alert-danger">
		<p><?php if (count($_smarty_tpl->tpl_vars['errors']->value)>1) {?><?php echo smartyTranslate(array('s'=>'There are %d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php } else { ?><?php echo smartyTranslate(array('s'=>'There is %d error','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value)),$_smarty_tpl);?>
<?php }?></p>
		<ol>
		<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['error']->key;
?>
			<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
		<?php } ?>
		</ol>
		<?php if (isset($_SERVER['HTTP_REFERER'])&&!strstr($_smarty_tpl->tpl_vars['request_uri']->value,'authentication')&&preg_replace('#^https?://[^/]+/#','/',$_SERVER['HTTP_REFERER'])!=$_smarty_tpl->tpl_vars['request_uri']->value) {?>
			<p class="lnk"><a class="alert-link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(htmlspecialchars($_SERVER['HTTP_REFERER'], ENT_QUOTES, 'UTF-8', true));?>
" title="<?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
">&laquo; <?php echo smartyTranslate(array('s'=>'Back'),$_smarty_tpl);?>
</a></p>
		<?php }?>
	</div>
<?php }?>
<?php }} ?>
