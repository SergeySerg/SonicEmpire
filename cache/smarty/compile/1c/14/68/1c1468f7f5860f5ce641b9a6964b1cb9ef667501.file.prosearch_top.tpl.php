<?php /* Smarty version Smarty-3.1.19, created on 2016-07-09 23:36:27
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\prosearch\prosearch_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1685781604be62af2-47698583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c1468f7f5860f5ce641b9a6964b1cb9ef667501' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_top.tpl',
      1 => 1468014804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1685781604be62af2-47698583',
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
  'unifunc' => 'content_5781604bf1e311_66489205',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5781604bf1e311_66489205')) {function content_5781604bf1e311_66489205($_smarty_tpl) {?><div id="search_block_top" class="search_block_top-my col-xs-6 col-sm-2 col-md-3" >
	<form id="searchbox" class="searchbox-my" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query_top-my" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'prosearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
        <button class="btn-my" title="Поиск"></button>
	</form>
</div>  

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/prosearch_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
