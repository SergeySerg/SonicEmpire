<?php /* Smarty version Smarty-3.1.19, created on 2017-01-11 15:48:26
         compiled from "E:\Webserver\domains\sonicempire.loc\modules\prosearch\prosearch_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9115587637aa0dc5b8-34126913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a7400f19af2a28f690688fb28b54ef32446ed24' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_top.tpl',
      1 => 1482757512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9115587637aa0dc5b8-34126913',
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
  'unifunc' => 'content_587637aa135bf7_09113132',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587637aa135bf7_09113132')) {function content_587637aa135bf7_09113132($_smarty_tpl) {?><div id="search_block_top" class="search_block_top-my col-xs-12 col-sm-5 col-md-5 col-lg-2" >
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
