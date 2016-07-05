<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 20:18:23
         compiled from "D:\Webserver\domains\sonicempire.loc\themes\sonicempire\modules\blocksearch\blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280577bebdf51c859-97125987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fcf293253e6740c5d9fb104de510a408cd68cd7' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\themes\\sonicempire\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1467738648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280577bebdf51c859-97125987',
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
  'unifunc' => 'content_577bebdf54f4d3_59700446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bebdf54f4d3_59700446')) {function content_577bebdf54f4d3_59700446($_smarty_tpl) {?>
<!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',null,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
