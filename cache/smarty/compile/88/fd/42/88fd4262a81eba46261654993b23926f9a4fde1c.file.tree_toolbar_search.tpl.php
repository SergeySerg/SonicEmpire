<?php /* Smarty version Smarty-3.1.19, created on 2016-07-05 19:42:59
         compiled from "D:\Webserver\domains\sonicempire.loc\admin\themes\default\template\helpers\tree\tree_toolbar_search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:32428577be393a3b323-23938248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88fd4262a81eba46261654993b23926f9a4fde1c' => 
    array (
      0 => 'D:\\Webserver\\domains\\sonicempire.loc\\admin\\themes\\default\\template\\helpers\\tree\\tree_toolbar_search.tpl',
      1 => 1465992074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32428577be393a3b323-23938248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'label' => 0,
    'id' => 0,
    'name' => 0,
    'class' => 0,
    'typeahead_source' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_577be393ab44c8_66323253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_577be393ab44c8_66323253')) {function content_577be393ab44c8_66323253($_smarty_tpl) {?>

<!-- <label for="node-search"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['label']->value),$_smarty_tpl);?>
</label> -->
<div class="pull-right">
	<input type="text"
		<?php if (isset($_smarty_tpl->tpl_vars['id']->value)) {?>id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['name']->value)) {?>name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php }?>
		class="search-field<?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>"
		placeholder="<?php echo smartyTranslate(array('s'=>'search...'),$_smarty_tpl);?>
" />
</div>

<?php if (isset($_smarty_tpl->tpl_vars['typeahead_source']->value)&&isset($_smarty_tpl->tpl_vars['id']->value)) {?>

<script type="text/javascript">
	$(document).ready(
		function()
		{
			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").typeahead(
			{
				name: "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
",
				valueKey: 'name',
				local: [<?php echo $_smarty_tpl->tpl_vars['typeahead_source']->value;?>
]
			});

			$("#<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
").keypress(function( event ) {
				if ( event.which == 13 ) {
					event.stopPropagation();
				}
			});
		}
	);
</script>
<?php }?><?php }} ?>
