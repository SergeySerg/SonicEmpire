<?php /*%%SmartyHeaderCode:3728577f9ecde74396-56306962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c1468f7f5860f5ce641b9a6964b1cb9ef667501' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_top.tpl',
      1 => 1467798933,
      2 => 'file',
    ),
    'ea66b408f01219e4fbf2d412cbf469ae4b623808' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_instant.tpl',
      1 => 1467798933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3728577f9ecde74396-56306962',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577f9fc50344c8_80849452',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577f9fc50344c8_80849452')) {function content_577f9fc50344c8_80849452($_smarty_tpl) {?><div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="http://sonicempire.loc/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>  

  <div id="search_autocomplete" class="search-autocomplete"></div>
	
		<script type="text/javascript">
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					       '/modules/prosearch/prosearchAjax.php',{
						minChars: 3,
						max: 10,
						width: 270,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value:' <img src="'+ data[i].ajaxsearchimage + '" />' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	</script>

			
<?php }} ?>
