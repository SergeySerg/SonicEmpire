<?php /* Smarty version Smarty-3.1.19, created on 2016-07-06 15:45:53
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\prosearch\prosearch_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16601577cfd81b5a245-72546880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c1468f7f5860f5ce641b9a6964b1cb9ef667501' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_top.tpl',
      1 => 1467798933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16601577cfd81b5a245-72546880',
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
  'unifunc' => 'content_577cfd81b8ced6_53873756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577cfd81b8ced6_53873756')) {function content_577cfd81b8ced6_53873756($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'prosearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'prosearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>  

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/prosearch_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
			
<?php }} ?>
