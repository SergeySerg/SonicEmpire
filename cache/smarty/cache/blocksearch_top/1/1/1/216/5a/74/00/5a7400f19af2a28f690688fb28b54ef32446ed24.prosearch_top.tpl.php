<?php /*%%SmartyHeaderCode:1892558610fdaef0072-51761917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a7400f19af2a28f690688fb28b54ef32446ed24' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_top.tpl',
      1 => 1482757512,
      2 => 'file',
    ),
    '9c87cbf5f38c0915af53c10c62a3e391b35bea66' => 
    array (
      0 => 'E:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_instant.tpl',
      1 => 1482143540,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1892558610fdaef0072-51761917',
  'cache_lifetime' => 31536000,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_586115a2f012a4_89898975',
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586115a2f012a4_89898975')) {function content_586115a2f012a4_89898975($_smarty_tpl) {?><div id="search_block_top" class="search_block_top-my col-xs-12 col-sm-5 col-md-5 col-lg-2" ><form id="searchbox" class="searchbox-my" method="get" action="http://sonicempire.loc/search" > <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query_top-my" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" /> <button class="btn-my" title="Поиск"></button></form></div><div id="search_autocomplete" class="search-autocomplete"></div> <script type="text/javascript">/* <![CDATA[ */;$('document').ready(function(){$("#search_query_top").autocomplete('/modules/prosearch/prosearchAjax.php',{minChars:3,max:10,width:270,selectFirst:false,scroll:false,dataType:"json",formatItem:function(data,i,max,value,term){return value;},parse:function(data){var mytab=new Array();for(var i=0;i<data.length;i++)
mytab[mytab.length]={data:data[i],value:' <img src="'+data[i].ajaxsearchimage+'" />'+data[i].pname};return mytab;},extraParams:{ajaxSearch:1,id_lang:1}}).result(function(event,data,formatted){$('#search_query_top').val(data.pname);document.location.href=data.product_link;})});/* ]]> */</script><?php }} ?>
