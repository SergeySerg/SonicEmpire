<?php /* Smarty version Smarty-3.1.19, created on 2016-08-31 15:40:53
         compiled from "/usr/www/users/stalkeg/sonicempire.com.ua/admin9377xbaxo/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:195748095757c6d055d2cb43-25954961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5837b03acc51bff8a3d93fece70d29f08c5d8516' => 
    array (
      0 => '/usr/www/users/stalkeg/sonicempire.com.ua/admin9377xbaxo/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1472567031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195748095757c6d055d2cb43-25954961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57c6d055d2f828_92699102',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57c6d055d2f828_92699102')) {function content_57c6d055d2f828_92699102($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
