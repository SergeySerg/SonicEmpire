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
    '37fe398e2488e4d7bd0bba05321be56bcec25f6b' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/modules/prosearch/prosearch_instant.tpl',
      1 => 1472567913,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60255549457c6d0bc8a1305-25773028',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d0bcb09085_76176016',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d0bcb09085_76176016')) {function content_57c6d0bcb09085_76176016($_smarty_tpl) {?><div id="search_block_top" class="search_block_top-my col-xs-6 col-sm-2 col-md-3" ><form id="searchbox" class="searchbox-my" method="get" action="http://sonicempire.com.ua/search" > <input type="hidden" name="controller" value="search" /> <input type="hidden" name="orderby" value="position" /> <input type="hidden" name="orderway" value="desc" /> <input class="search_query_top-my" type="text" id="search_query_top" name="search_query" placeholder="Поиск" value="" /> <button class="btn-my" title="Поиск"></button></form></div><div id="search_autocomplete" class="search-autocomplete"></div> <script type="text/javascript">/* <![CDATA[ */;$('document').ready(function(){$("#search_query_top").autocomplete('/modules/prosearch/prosearchAjax.php',{minChars:3,max:10,width:270,selectFirst:false,scroll:false,dataType:"json",formatItem:function(data,i,max,value,term){return value;},parse:function(data){var mytab=new Array();for(var i=0;i<data.length;i++)
mytab[mytab.length]={data:data[i],value:' <img src="'+data[i].ajaxsearchimage+'" />'+data[i].pname};return mytab;},extraParams:{ajaxSearch:1,id_lang:1}}).result(function(event,data,formatted){$('#search_query_top').val(data.pname);document.location.href=data.product_link;})});/* ]]> */</script><?php }} ?>
