<?php /* Smarty version Smarty-3.1.19, created on 2017-05-24 01:05:02
         compiled from "E:\Webserver\domains\sonicempire.loc\themes\sonicempire\breadcrumb.tpl" */ ?>
<?php /*%%SmartyHeaderCode:34575924b20e965d60-98556599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8302702a221773fa3fd613148cd03c24fe7bfbe2' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\breadcrumb.tpl',
      1 => 1482143542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '34575924b20e965d60-98556599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
    'path' => 0,
    'category' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5924b20ea2fab7_60495423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5924b20ea2fab7_60495423')) {function content_5924b20ea2fab7_60495423($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\Webserver\\domains\\sonicempire.loc\\tools\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_regex_replace')) include 'E:\\Webserver\\domains\\sonicempire.loc\\tools\\smarty\\plugins\\modifier.regex_replace.php';
?>
<!-- Breadcrumb -->
<?php if (isset(Smarty::$_smarty_vars['capture']['path'])) {?><?php $_smarty_tpl->tpl_vars['path'] = new Smarty_variable(Smarty::$_smarty_vars['capture']['path'], null, 0);?><?php }?>
<div class="breadcrumb">
    <div class="container">
        <div class="row">
            <a href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Return to Home'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
</a>
            <?php if (isset($_smarty_tpl->tpl_vars['path']->value)&&$_smarty_tpl->tpl_vars['path']->value) {?>
                <span class="navigation-pipe"<?php if (isset($_smarty_tpl->tpl_vars['category']->value)&&isset($_smarty_tpl->tpl_vars['category']->value->id_category)&&$_smarty_tpl->tpl_vars['category']->value->id_category==(int)Configuration::get('PS_ROOT_CATEGORY')) {?> style="display:none;"<?php }?>>&nbsp<i class="fa fa-angle-right"></i>&nbsp</span>
                <?php if (strpos($_smarty_tpl->tpl_vars['path']->value,'span')!==false) {?>
                    <span class="navigation_page"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['path']->value,'<a ','<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" '),'data-gg="">','><span itemprop="title">'),'</a>','&nbsp</span>&nbsp</a></span>');?>
</span>
                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['path']->value;?>

                <?php }?>
            <?php }?>
        </div>
    </div>
</div>
<?php if (isset($_GET['search_query'])&&isset($_GET['results'])&&$_GET['results']>1&&isset($_SERVER['HTTP_REFERER'])) {?>
<div class="pull-right">
	<strong>
		<?php $_smarty_tpl->_capture_stack[0][] = array('default', null, null); ob_start(); ?><?php if (isset($_GET['HTTP_REFERER'])&&$_GET['HTTP_REFERER']) {?><?php echo $_GET['HTTP_REFERER'];?>
<?php } elseif (isset($_SERVER['HTTP_REFERER'])&&$_SERVER['HTTP_REFERER']) {?><?php echo $_SERVER['HTTP_REFERER'];?>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
		<a href="<?php echo smarty_modifier_regex_replace($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['secureReferrer'][0][0]->secureReferrer(htmlspecialchars(Smarty::$_smarty_vars['capture']['default'], ENT_QUOTES, 'UTF-8', true)),'/[\?|&]content_only=1/','');?>
" name="back">
			<i class="icon-chevron-left left"></i> <?php echo smartyTranslate(array('s'=>'Back to Search results for "%s" (%d other results)','sprintf'=>array($_GET['search_query'],$_GET['results'])),$_smarty_tpl);?>

		</a>
	</strong>
</div>
<?php }?>
<!-- /Breadcrumb -->
<!--<div class="breadcrumb">
	<div class="container">
		<div class="row">
			<ul>
				<li><a href="#">Главная</a></li>
				<li><i class="fa fa-angle-right"></i></li>
				<li><a href="#">Marshall</a></li>
			</ul>
		</div>
	</div>
</div>--><?php }} ?>
