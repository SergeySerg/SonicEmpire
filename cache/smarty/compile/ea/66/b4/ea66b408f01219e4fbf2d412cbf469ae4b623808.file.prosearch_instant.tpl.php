<?php /* Smarty version Smarty-3.1.19, created on 2016-07-16 15:43:10
         compiled from "D:\Webserver\domains\sonicempire.loc\modules\prosearch\prosearch_instant.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5313578a2bde6177b4-32952350%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea66b408f01219e4fbf2d412cbf469ae4b623808' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\modules\\prosearch\\prosearch_instant.tpl',
      1 => 1467798933,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5313578a2bde6177b4-32952350',
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
  'unifunc' => 'content_578a2bde63aa34_63201864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_578a2bde63aa34_63201864')) {function content_578a2bde63aa34_63201864($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['instantsearch']->value) {?>
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
