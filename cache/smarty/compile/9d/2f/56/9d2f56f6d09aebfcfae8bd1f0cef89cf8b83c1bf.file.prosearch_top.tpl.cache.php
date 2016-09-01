<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 15:42:36
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/modules/prosearch/prosearch_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60255549457c6d0bc8a1305-25773028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d2f56f6d09aebfcfae8bd1f0cef89cf8b83c1bf' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/modules/prosearch/prosearch_top.tpl',
      1 => 1472567913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60255549457c6d0bc8a1305-25773028',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d0bc8dbbd8_39322728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d0bc8dbbd8_39322728')) {function content_57c6d0bc8dbbd8_39322728($_smarty_tpl) {?><div id="search_block_top" class="search_block_top-my col-xs-6 col-sm-2 col-md-3" >
	<form id="searchbox" class="searchbox-my" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query_top-my" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Поиск','mod'=>'prosearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
        <button class="btn-my" title="Поиск"></button>
	</form>
</div>  

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/prosearch_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

<?php }} ?>
