<?php /* Smarty version Smarty-3.1.19, created on 2016-12-26 13:15:27
         compiled from "D:\OpenServer\domains\sonicempire.loc\modules\prosearch\prosearch_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:35815860fbcfec6692-42501946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4d867042803fdbcaf702f88ab1f0deb8665d9d' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_top.tpl',
      1 => 1482747698,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35815860fbcfec6692-42501946',
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
  'unifunc' => 'content_5860fbd000b403_27050006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5860fbd000b403_27050006')) {function content_5860fbd000b403_27050006($_smarty_tpl) {?><div id="search_block_top" class="search_block_top-my col-xs-12 col-sm-5 col-md-5 col-lg-2" >
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
	
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['self']->value)."/prosearch_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
