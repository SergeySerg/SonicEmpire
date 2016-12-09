<?php /* Smarty version Smarty-3.1.19, created on 2016-12-07 13:27:49
         compiled from "D:\OpenServer\domains\sonicempire.loc\modules\prosearch\prosearch_instant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199955847f2350ac5d4-16111885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4274b0ff77e77dba4850a28f5fdff0fd0275398' => 
    array (
      0 => 'D:\\OpenServer\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_instant.tpl',
      1 => 1479314262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199955847f2350ac5d4-16111885',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'instantsearch' => 0,
    'prosearchmod' => 0,
    'ajaxsearch' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5847f2350cdc97_72942764',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5847f2350cdc97_72942764')) {function content_5847f2350cdc97_72942764($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['instantsearch']->value) {?>
	<script type="text/javascript">
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					       '<?php echo $_smarty_tpl->tpl_vars['prosearchmod']->value;?>
',{
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
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	</script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ajaxsearch']->value) {?>
	<script type="text/javascript">
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					       '<?php echo $_smarty_tpl->tpl_vars['prosearchmod']->value;?>
',{
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
							id_lang: <?php echo $_smarty_tpl->tpl_vars['cookie']->value->id_lang;?>

						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	</script>
<?php }?>

<?php }} ?>
