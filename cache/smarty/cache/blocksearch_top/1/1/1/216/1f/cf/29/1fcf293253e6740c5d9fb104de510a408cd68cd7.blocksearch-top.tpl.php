<?php /*%%SmartyHeaderCode:15690577bf387f237c4-85246225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '15690577bf387f237c4-85246225',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577bf671c209d8_65590707',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577bf671c209d8_65590707')) {function content_577bf671c209d8_65590707($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//sonicempire.loc/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Поиск</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
